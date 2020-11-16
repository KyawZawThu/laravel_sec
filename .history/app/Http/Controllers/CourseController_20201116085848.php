<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Teacher;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('course.create',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            "name" => "required",
            "url"  => "required",
            "photo"=> "required",
            "teacher"=> "required"
        ]);

        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('courseimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }

        $course = new Course;
        $course->name = $request->name;
        $course->url = $request->url;
        $course->photo = $path;
        $course->teacher_id = $request->teacher;
        $course->save();

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $teachers = Teacher::find($id);
        $course = Course::find($id);
        return view('course.show', compact('course','teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            "name" => "sometimes | required|min:5",
            "url" => "sometimes | required",

            "photo" => "sometimes | required",
            "oldphoto" => "required",
            "teacher"=> "sometimes|required"
        ]);


        // if include file, upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('courseimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        } else {
            $path = $request->oldphoto;
        }

        // store

        $course = Course::find($id);
        $course->name = $request->name;
        $course->url= $request->url;


        $course->photo = $path;
        $course->save();

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
