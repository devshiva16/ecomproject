<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock_list = Stock::with('product')->get();
        return view('admin.product.stock-list',['stock_list'=>$stock_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        // $category = Product::all();
        return view('admin.product.add-stock',['product'=>$product]);//,'category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(($request));
        $product_stock = Stock::where('product',$request->product)->get();
        // dd($product_stock);
        if($product_stock->count()>0){
            $oldQunatity = $product_stock[0]->in_stock_quantity;
            $product_stock[0]->in_stock_quantity = $oldQunatity  + $request->stock;
            $product_stock[0]->save();
        }else{
            $insert_data = new Stock();
            $insert_data->product = $request->product;
            $insert_data->in_stock_quantity = $request->stock;
            $insert_data->status = true;
            $insert_data->is_delete = false;
            // dd($insert_data);
            $insert_data->save();
        }
        return redirect('/stock');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
