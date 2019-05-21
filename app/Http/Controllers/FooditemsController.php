<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodItem;
use DB;
class FoodItemsController extends Controller
{
    /**
     *
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fooditems = FoodItem::all();
        return $fooditems;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fooditem = new FoodItem();
        $fooditem->dish_name = $request->dish_name;
        $fooditem->price = $request->price;
        $fooditem->tot_cost = $request->tot_cost;
        $fooditem->s_num = $request->s_num;

        $fooditem->save();
        return $fooditem;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $fooditems)
    {
        return FoodItem::where('dish_name', '=', $fooditems)->where('s_num', '=', $request->s_num)->first();
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
    public function update(Request $request, $fooditem)
    {
        $fooditem = FoodItem::where('dish_name', '=', $fooditem)->first();
        
        if($request->price)
            $fooditem->price = $request->price;
        
        if($request->dish_name)
            $fooditem->dish_name = $request->dish_name;

        if($request->tot_cost)
            $fooditem->tot_cost = $request->tot_cost;

        if($request->s_num)
            $fooditem->s_num = $request->s_num;
        
        $fooditem->save();
        return $fooditem;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($fooditem)
    {
        // $item = FoodItem::where('dish_name', '=', $fooditem)->first();
        return DB::delete("DELETE from food_items where dish_name = '".$fooditem."'");
    }
}
