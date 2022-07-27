<?php

namespace App\Http\Controllers;

use App\Models\Order_transation;
use Illuminate\Http\Request;

class OrderTransationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customer.order-transation');
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
     * @param  \App\Models\Order_transation  $order_transation
     * @return \Illuminate\Http\Response
     */
    public function show(Order_transation $order_transation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order_transation  $order_transation
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_transation $order_transation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order_transation  $order_transation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_transation $order_transation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order_transation  $order_transation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_transation $order_transation)
    {
        //
    }
}
