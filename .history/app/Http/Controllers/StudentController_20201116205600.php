<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Hash;
use App\CorseStudent;




class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
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
            "name" => "required|min:5",
            "email" => "required",
            "description" => "sometimes | required",
            "photo" => "sometimes | required"
        ]);


        // if include file, upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('studentimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }

        // store
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $corsestudent = new CorseStudent;
        $corsestudent->save();

        $student = new Student;

        $student->description = $request->description;
        $student->position = $request ->position;
        $student->est_salary = $request ->est_salary;

        $student->photo = $path;
        $student->user_id = $user->id;
        $student->save();





        $user->assignRole('student');

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "sometimes | required|min:5",
            "email" => "sometimes | required",
            "description" => "sometimes |required",
            "position" => "sometimes | required",
            "est_salary"=>"sometimes | required",

            "photo" => "sometimes | required",
            "oldphoto" => "required"
        ]);


        // if include file, upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('studentimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        } else {
            $path = $request->oldphoto;
        }

        // store

        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->description = $request->description;
        $student->position = $request->position;
        $student->est_salary = $request->est_salary;

        $student->photo = $path;
        $student->save();

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
