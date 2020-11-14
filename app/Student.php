<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['name', 'email', 'description', 'position', 'est_salary', 'photo'];

      public function projects()
  	  {
      	return $this->hasMany('App\Project');
  	  }


    public function courses(){
        return $this->belongsToMany('App\Course')
                    ->withTimestamps();
    }
}
