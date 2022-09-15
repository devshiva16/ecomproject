<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Producttype;
use Illuminate\Http\Request;

class ProducttypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Producttype::with('product')->get();
        return view('admin.product.product-type-list',['producttypelist'=>$data]);
    }


    /**
     * Get List of Sub Category based on Category Id
     * @return \Illuminate\Http\Response
     */
    public function GetProducttypeByProductId(Request $request){
        // dd($request);
        $list = Producttype::where('product_id',$request->productid)->get();
        return $list;
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productlist = Product::all();
        return view('admin.product.add-producttype',['productlist'=>$productlist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producttype = new Producttype();
        $producttype->product_id = $request->product;
        $producttype->name =$request->name;
        $producttype->status=true;
        $producttype->is_delete=false;
        $producttype->save();

        return redirect('/producttype');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producttype  $producttype
     * @return \Illuminate\Http\Response
     */
    public function show(Producttype $producttype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producttype  $producttype
     * @return \Illuminate\Http\Response
     */
    public function edit(Producttype $producttype)
    {
        $productlist = Product::all();
        $producttype = Producttype::find($producttype->id);
        return view('admin.product.edit-producttype',['producttype'=>$producttype,'productlist'=>$productlist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producttype  $producttype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producttype $producttype)
    {
        $update_data = [
            'product_id'=>$request->product,
            'name'=>$request->name

        ];
        $producttype->update($update_data);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producttype  $producttype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producttype $producttype)
    {
        //
    }

    public function changeStatus(Request $request){
        $product = Producttype::where('id',$request->id)->first();
        if($product){
            $product->status = !$product->status;
            $product->save();
            return true;
        }
        else{
            return false;
        }
    }
}
