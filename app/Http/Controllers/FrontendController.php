<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Course;
use App\Teacher;
use App\Student;
class FrontendController extends Controller
{
    public function frontend($value='')
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        $projects=Project::all();
        $students = Student::all();
    	$confirmed=Project::where('status',1)->get();
    	return view('/frontend', compact('projects','confirmed', 'courses', 'teachers','students'));
    }

    public function detailsc($value='')
  {
    return view('frontend.scoutpage');
  }

  public function frontend_registration($value=''){
      return view('frontend.frontend_registration');
  }

  public function frontend_teacher_register($value=''){
    return view('frontend.frontend_teacher_register');
}

public function frontend_company_register($value=''){
    return view('frontend.frontend_company_register');
}

    public function uploadpj($value='')
  {
    return view('frontend.upload');
  }

  public function detailc($value='')
  {
    $students = Student::all();
    return view('frontend.detailc',compact('students'));
  }


}
