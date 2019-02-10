<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Job extends Model
{
	protected $guarded = [];
	protected $dates = ['expires_at','start_at'];
    protected $appends = ['applied'];
    protected $casts = [
        'zip' => 'integer',
    ];
    public function user()
	{
		return $this->belongsTo('App\User');
	}
    public function state()
    {
        return $this->belongsTo('App\State');
    }
    public function scopeActive($query)
    {
        return $query->where('expires_at', '>=' , \Carbon\Carbon::now()->format('Y-m-d'));
    }
    public function scopeInActive($query)
    {
        return $query->where('expires_at', '<' , \Carbon\Carbon::now()->format('Y-m-d'));
    }
    public function setExpiresAtAttribute($date)
    {
        $this->attributes['expires_at'] = Carbon::createFromFormat('d/m/Y', $date);
    }
    public function getExpiresAtAttribute($date)
    {
        $date = new Carbon($date);
        return $date->format('d/m/Y');
    }
    public function setStartAtAttribute($date)
    {
        $this->attributes['start_at'] = Carbon::createFromFormat('d/m/Y', $date);
    }
    public function getStartAtAttribute($date)
    {
        $date = new Carbon($date);
        return $date->format('d/m/Y');
    }
    public function category()
	{
		return $this->belongsTo('App\Category');
	}
    public function applicant()
    {
        return $this->hasMany('App\Apply');
    }
    public function getAppliedAttribute()
    {
        if(auth()->guest())
            return false;
        return (auth()->user()->applies()->where('job_id',$this->id)->count() > 0 );
    }
}
