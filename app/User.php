<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $guarded = [];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function details()
    {
        if($this->role == "hospital"){
            return $this->hasOne('App\HospitalDetails');
        }else{
            return $this->hasOne('App\EmployeeDetails');
        }
    }
    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
    public function cvs()
    {
        return $this->hasMany('App\Cv');
    }
    public function documents()
    {
        return $this->hasMany('App\Document');
    }
    public function scopeHospital($query)
    {
        return $query->where('role', '=' , 'hospital');
    }
    public function scopeEmployee($query)
    {
        return $query->where('role', '=' , 'employee');
    }
    public function applies(){
        return $this->hasMany('App\Apply');
    }
}
