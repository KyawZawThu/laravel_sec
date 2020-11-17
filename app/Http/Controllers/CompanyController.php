<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=Company::all();
        return view('company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            "name"=> "required|min:5",
            "address"=> "required",
            "contact"=> "required",
            "description"=> "required",
            "email"=> "required",
            "photo"=> "required|mimes:jpeg,bmp,png", // a.jpg
        ]);

        // if include file, upload
        if($request->file()){
            //394783748374_a.jpg
            $fileName=time().'_'.$request->photo->getClientOriginalName();
            //brandimg/92837408324_a.jpg
            $filePath=$request->file('photo')->storeAs('companyimg',$fileName,'public');

            $path='/storage/'.$filePath;
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        // store

        $company=new Company;
        $company->name = $request->name;
        $company->address=$request->address;
        $company->contact=$request->contact;
        $company->description= $request->description;
        $company->photo=$path;
        $company->user_id = $user->id;
        $company->save();
        // redirect
        $user->assignRole('company');

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {

        return view('company.show',compact('company'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            "name" => "required|min:5",
            "address"=> "required",
            "contact"=> "required",
            "description"=> "required",
            "email"=> "required",
            "photo" => "sometimes|required|mimes:jpeg,bmp,png", // a.jpg
            "oldphoto" => "required"
        ]);

        // if include file, upload
        if($request->file()) {
            // delete olo photo

            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('brandimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }else{
            $path = $request->oldphoto;
        }
     // update
        $company = Company::find($id);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->contact = $request->contact;
        $company->description = $request->description;
        $company->email = $request->email;
        $company->photo = $path;
        $company->save();

        // redirect
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company= Company::find($id);
        $company->delete();
        return redirect()->route('company.index');
    }
}
