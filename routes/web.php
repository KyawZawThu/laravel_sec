<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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


Route::get('/','FrontendController@frontend')->name('mainpage');
// Route::get('frontend_student_login','FrontendController@frontend')->name('mainpage');

Route::get('detailsc','FrontendController@detailsc')->name('detailsc');

Route::middleware('role:student')->group(function () {
Route::get('uploadpj','FrontendController@uploadpj')->name('uploadpj');
});

Route::get('mylearing','FrontendController@mylearing')->name('mylearing');


Route::get('scout','FrontendController@scout')->name('scoutpage');
Route::get('code','FrontendController@code')->name('code');
Route::get('frontend_registration', 'FrontendController@frontend_registration')->name('student_registration');
Route::get('frontend_teacher_register', 'FrontendController@frontend_teacher_register')->name('teacher_register');
Route::get('frontend_company_register', 'FrontendController@frontend_company_register')->name('company_register');

Route::middleware('role:admin')->group(function () {
Route::resource('teacher', 'TeacherController');
Route::resource('student', 'StudentController');
Route::resource('course', 'CourseController');
Route::resource('project', 'ProjectController');
Route::post('confirm/{id}','ProjectController@confirm')->name('project.confirm');
Route::post('confirmsc/{id}','ScoutController@confirmsc')->name('scout.confirmsc');
Route::resource('company', 'CompanyController');
Route::resource('scout', 'ScoutController');
});

// Auth::routes();

Route::resource('user', 'UserController');
Auth::routes(['register'=>false]);


Route::get('/home', 'HomeController@index')->name('home');
Route::get('detailc','FrontendController@detailc')->name('detailc');
Route::resource('upload', 'UploadController');
Route::resource('fescout', 'FeScoutController');
Route::resource('cd', 'CdController');
// Route::resource('fecourse', 'FeCourseController');
Route::resource('fstu', 'FstuController');