<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Course;
use App\Teacher;

class FrontendController extends Controller
{
    public function frontend($value='')
    {
        $teachers = Teacher::all();
        $courses = Course::all();
    	$projects=Project::all();
    	$confirmed=Project::where('status',1)->get();
    	return view('frontend', compact('projects','confirmed', 'courses', 'teachers'));
    }

    public function scout($value='')
  {
    return view('frontend.scoutpage');
  }


}
