<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use DB;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredient::all();
        return $ingredients;
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
        $ingredient = new Ingredient();
        $ingredient->ingredient_name = $request->ingredient_name;
        $ingredient->quantity_available = $request->quantity_available;
        $ingredient->cost_ave = $request->cost_ave;
        $ingredient->si_num = $request->si_num;
        $ingredient->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $ingredients)
    {
        return Ingredient::where('ingredient_name', '=', $ingredients)->where('si_num', '=', $request->si_num)->first();
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
    public function update(Request $request, $ingredient)
    {
        // $ingredient = Ingredient::where('ingredient_name', '=', $ingredient)->first();
        $ingredient = Ingredient::where('si_num', '=', $request->si_num)->find($ingredient);
        
        if($request->quantity_available)
            $ingredient->quantity_available = $request->quantity_available;
        if($request->cost_ave)
            $ingredient->cost_ave = $request->cost_ave;
        $ingredient->save();
        return $ingredient;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $ingredient)
    {
        return DB::delete("DELETE from ingredients where ingredient_name = '".$ingredient."' and si_num = '".$request->si_num."'");
    }
}
