<?php

namespace App\Http\Controllers;

use App\Models\Order_itum;
use Illuminate\Http\Request;

class OrderItumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customer.order-item');
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
     * @param  \App\Models\Order_itum  $order_itum
     * @return \Illuminate\Http\Response
     */
    public function show(Order_itum $order_itum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order_itum  $order_itum
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_itum $order_itum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order_itum  $order_itum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_itum $order_itum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order_itum  $order_itum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_itum $order_itum)
    {
        //
    }
}
