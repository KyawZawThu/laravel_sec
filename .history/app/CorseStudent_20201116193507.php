<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorseStudent extends Model
{
    protected $fillable = ['student_id', 'course_id'];

    public function courses(){
        return $this->belongsTo('App\Course')
                    ->withTimestamps();




    }



    public function student(){
        return $this->belongsTo('App\Student');
    }
}
