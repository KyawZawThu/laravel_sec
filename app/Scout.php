<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scout extends Model
{
    protected $fillable ["scoutdate","notes","status","user_id"];

      public function students()
  	  {
  	  	return $this->belongsToMany('App\Student')
  	  				->withTimestamps();	
  	  }
}
