<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['name', 'email', 'description', 'position', 'est_salary', 'photo'];
}
