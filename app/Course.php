<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    protected $fillable = ['name', 'url', 'photo','description', 'teacher_id' ];

    // public function teacher(){
    //     return $this->belongsToMany('App\Teacher')
    //                 ->withTimestamps();
    // }

    public function teacher(){
        return $this->belongsTo('App\Teacher');
    }

      public function students()
  	  {
  	  	return $this->belongsToMany('App\Student','coursestudents')
  	  				->withTimestamps();
  	  }
}
