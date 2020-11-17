<?php

namespace App\Http\Controllers;

use App\Scout;
use Illuminate\Http\Request;
use Auth;
class FeScoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // dd($request);

        // validation

        // data store
        $myorder = json_decode($request->order);
        $notes = $request->notes;
        $orderdate = date('Y-m-d');
        
        $order = new Scout;
        $order->scoutdate = $orderdate;
        $order->notes = $notes;
        $order->user_id = Auth::id(); // current logined user_id
        $order->save();
        /*  [
                {"id":1,"name":"item one","photo":"path","price":5000,"qty":3},
                {"id":2,"name":"item one","photo":"path","price":6000,"qty":1}
            ]
        */
        foreach ($myorder as $row) { 
            $order->students()->attach($row->id);
        }

        return "Successful Your Order";

        // ajax response
        // return response()
        //     ->json(['msg' => 'Successful You Order!']);

        // form response
        return redirect('mainpage')->with('success_message','Thanks, we will contact soon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function show(Scout $scout)
    {
        //
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
}
