<?php

namespace App\Http\Controllers;

use App\Models\Order_table;
use Illuminate\Http\Request;

class OrderTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customer.order-table');
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
     * @param  \App\Models\Order_table  $order_table
     * @return \Illuminate\Http\Response
     */
    public function show(Order_table $order_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order_table  $order_table
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_table $order_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order_table  $order_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_table $order_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order_table  $order_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_table $order_table)
    {
        //
    }
}
