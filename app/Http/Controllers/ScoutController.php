<?php

namespace App\Http\Controllers;

use App\Scout;
use Illuminate\Http\Request;


class ScoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pending_scouts=Scout::where('status',0)->get();
        $confirmed_scouts=Scout::where('status',1)->get();
        return view('scout.index', compact('pending_scouts','confirmed_scouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function show(Scout $scout)
    {
        return view('scout.show', compact('scout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function edit(Scout $scout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scout $scout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scout $scout)
    {
        //
    }

        public function confirmsc($id)
    {
        $scout=Scout::find($id);
        $scout->status=1;
        $scout->save();
        return back();
    }
}
