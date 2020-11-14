<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class FrontendController extends Controller
{
    public function frontend($value='')
    {
    	$projects=Project::all();
    	$confirmed=Project::where('status',1)->get();
    	return view('frontend', compact('projects','confirmed'));
    }
}
