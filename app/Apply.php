<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
	protected $guarded = [];
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function status()
	{
		return $this->belongsTo('App\JobApplyStatus','job_apply_status_id');
	}
    public function job()
	{
		return $this->belongsTo('App\Job');
	}
	public function document()
	{
		return $this->belongsTo('App\Document');
	}
	public function Cv()
	{
		return $this->belongsTo('App\CV');
	}
}
