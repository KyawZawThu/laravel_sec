<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'url', 'photo', 'teacher_id' ];

    public function students(){
        return $this->belongsToMany('App\Student')
                    ->withTimestamps();
    }
}
