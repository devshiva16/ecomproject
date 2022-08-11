<?php

namespace App\Http\Controllers;

use App\Models\Customer_Review_Rating;
use Illuminate\Http\Request;

class CustomerReviewRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerrating = Customer_Review_Rating::all();
        return view('admin.customer.customer-rating-list',['customerrating'=>$customerrating]);
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
     * @param  \App\Models\Customer_Review_Rating  $customer_Review_Rating
     * @return \Illuminate\Http\Response
     */
    public function show(Customer_Review_Rating $customer_Review_Rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer_Review_Rating  $customer_Review_Rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer_Review_Rating $customer_Review_Rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer_Review_Rating  $customer_Review_Rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer_Review_Rating $customer_Review_Rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer_Review_Rating  $customer_Review_Rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer_Review_Rating $customer_Review_Rating)
    {
        //
    }
}
