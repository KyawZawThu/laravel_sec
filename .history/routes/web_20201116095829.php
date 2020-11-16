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

Route::get('frontend2', function(){
    return view('frontend_student_login');
});


Route::get('frontend','FrontendController@frontend')->name('mainpage');
// Route::get('frontend_student_login','FrontendController@frontend')->name('mainpage');
Route::get('scout','FrontendController@scout')->name('scoutpage');
Route::get('frontend_registration', 'FrontendController@frontend_registration')->name('student_registration');
Route::resource('teacher', 'TeacherController');
Route::resource('student', 'StudentController');
Route::resource('course', 'CourseController');
Route::resource('project', 'ProjectController');
Route::post('confirm/{id}','ProjectController@confirm')->name('project.confirm');
Route::resource('company', 'CompanyController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

