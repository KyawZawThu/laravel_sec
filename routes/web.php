<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('backend', function(){
    return view('backend');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::resource('teacher', 'TeacherController');
Route::resource('student', 'StudentController');
Route::resource('course', 'CourseController');
Route::resource('project', 'ProjectController');
Route::post('confirm/{id}','ProjectController@confirm')->name('project.confirm');
Route::resource('company', 'CompanyController');
