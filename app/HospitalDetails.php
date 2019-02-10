<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalDetails extends Model
{
	protected $guarded = [];

    protected $appends = array('logoSmall','logoUrl','bannerSmall','bannerUrl');

    public function user()
	{
		return $this->belongsTo('App\User');
	}

    public function getLogoUrlAttribute()
    {
        return url('user/logo/'.$this->logo);
    }

    public function getLogoSmallAttribute()
    {
        $logo = $this->logo;
        $ext = explode('.', $logo);
        $logo = $ext[0].'-250X200'.'.'.$ext[1];
        return url('user/logo/'.$logo);
    }

    public function getBannerUrlAttribute()
    {
        return url('user/banner/'.$this->banner);
    }

    public function getBannerSmallAttribute()
    {
        $banner = $this->banner;
        $ext = explode('.', $banner);
        $banner = $ext[0].'-250X200'.'.'.$ext[1];
        return url('user/banner/'.$banner);
    }

}
