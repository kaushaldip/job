<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	protected $guarded = [];
    public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function applies()
	{
		return $this->hasOne('App\Apply');
	}
}
