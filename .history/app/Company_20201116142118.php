<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [ 'address', 'contact', 'description', 'photo', 'user_id'];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
