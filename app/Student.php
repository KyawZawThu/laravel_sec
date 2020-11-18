<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['name','description', 'position', 'est_salary', 'photo', 'user_id'];

      public function projects()
  	  {
      	return $this->hasMany('App\Project');
  	  }

  	  public function scouts()
  	  {
  	  	return $this->belongsToMany('App\Scout','scoutstudents')
  	  				->withTimestamps();
  	  }


    public function courses(){
        return $this->belongsToMany('App\Course','coursestudents')
                    ->withTimestamps();




    }
    // public function User(){
    //     return $this->belongsToMany('App\User')
    //                    ->withTimestamps();

    // }


    public function user(){
        return $this->belongsTo('App\User');
    }
}
