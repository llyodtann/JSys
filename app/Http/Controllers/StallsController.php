<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stall;

class StallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fooditems = Stall::all();
        return $fooditems;
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
        $stall = new Stall();
        $stall->stall_num = $request->stall_num;
        $stall->s_name = $request->s_name;
        $stall->location = $request->location;
        $stall->save();
        return $stall;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stall $stall)
    {
        return $stall;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stall $stall)
    {
        $stall->stall_num = $request->stall_num;
        $stall->s_name = $request->s_name;
        $stall->location = $request->location;
        $stall->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stall $stall)
    {
        $stall->delete();
        return 'Successfully Deleted';
    }
}
