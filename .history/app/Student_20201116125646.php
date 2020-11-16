<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =[ 'description', 'position', 'est_salary', 'photo', 'user_id'];

      public function projects()
  	  {
      	return $this->hasMany('App\Project');
  	  }

  	  public function scouts()
  	  {
  	  	return $this->belongsToMany('App\Scout')
  	  				->withTimestamps();
  	  }


    public function courses(){
        return $this->belongsToMany('App\Course')
                    ->withTimestamps();

     public function User(){
         return $this->belongsToMany('App\User')
                        ->withTimestamps();


    }
}
