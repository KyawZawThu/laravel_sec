<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'url', 'description','status', 'student_id'];

  public function student($value='')
  {
    return $this->belongsTo('App\Student');
  }
}
