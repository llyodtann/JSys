<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        return $transactions;
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
        $transaction = new Transaction();
        $transaction->transaction_number = $request->order_number;
        $transaction->total = $request->total - $request->total_discount;
        $transaction->total_cost = $request->total_cost;
        $transaction->cash = $request->cash;
        $transaction->t_change = $request->cash - $request->total;
        $transaction->total_discount = $request->total_discount;
        $transaction->str_num = $request->str_num;
        $transaction->save();

        return $transaction;
        // $tfi = new TransactionFoodItem();
        // $tfi->quantity = $request->quantity;
        // $tfi->discount = $request->discount;
        // $tfi->subcost = $request->subcost;
        // $tfi->subtotal = $request->subtotal;
        // $tfi->order_num = $request->order_num;
        // $tfi->dish = $request->dish;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($transaction)
    {
        return Transaction::where('transaction_number', '=', $transaction)->first();
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
    public function update(Request $request, $transaction)
    {
        $transaction = Transaction::where('transaction_number', '=', $transaction)->first();
        if($request->total)
            $transaction->total = $request->total;
        if($request->total_cost)
            $transaction->total_cost = $request->total_cost;
        if($request->cash)
            $transaction->cash = $request->cash;
        if($request->t_change)
            $transaction->t_change = $request->t_change;
        if($request->total_discount)
            $transaction->total_discount = $request->total_discount;        
        $transaction->save();
        return $transaction;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($transaction)
    {
        $transaction = Transaction::where('transaction_number', '=', $transaction)->first();
        $transaction->delete();
        return "Successfully Deleted";
    }
}
