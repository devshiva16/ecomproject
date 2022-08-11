<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Pincode_Deliverable;
use App\Models\Product;
use App\Models\State;
use Illuminate\Http\Request;

class PincodeDeliverableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pincode_list = Pincode_Deliverable::all();
        return view('admin.address.pincode-list',['pincode_list'=>$pincode_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = City::all();
        $state = State::all();
        $country = Country::all();
        return view('admin.address.add-pincode',['city'=>$city,'state'=>$state,'country'=>$country]);
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
     * @param  \App\Models\Pincode_Deliverable  $pincode_Deliverable
     * @return \Illuminate\Http\Response
     */
    public function show(Pincode_Deliverable $pincode_Deliverable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pincode_Deliverable  $pincode_Deliverable
     * @return \Illuminate\Http\Response
     */
    public function edit(Pincode_Deliverable $pincode_Deliverable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pincode_Deliverable  $pincode_Deliverable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pincode_Deliverable $pincode_Deliverable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pincode_Deliverable  $pincode_Deliverable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pincode_Deliverable $pincode_Deliverable)
    {
        //
    }
}
