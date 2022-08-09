<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_list = Product::all();

        return view('admin.product.product-list',['product_list'=>$product_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryList = Category::all();
        return view('admin.product.add-product',['category_list'=>$categoryList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $insert_product = new Product();
        $insert_product->name = $request->name;
        $insert_product->code = $request->code;
        $insert_product->short_name = $request->short_name;
        $insert_product->price = $request->price;
        // $insert_product->sale_price = $request->sale_price;
        $insert_product->unit = $request->unit;
        $insert_product->weight = $request->weight;
        $insert_product->sku = $request->sku;
        $insert_product->category = $request->category;
        $insert_product->sub_category = $request->sub_category;
        $insert_product->discription = $request->category;
        // $insert_product->is_discount = false;
        $insert_product->status = true;
        $insert_product->is_delete = false;

        $insert_product->save();
        //Store Image
            // $data = new Postimage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('product_image'), $filename);
            
            $image = new ProductImage();
            $image->image_url = $filename;
            $image->product_id = $insert_product->id;
            $image->is_main = true;
            $image->is_active = true;
            $image->is_delete = false;
            $image->save();

        }
        // $data->save();
         return redirect('/product');
           
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.product.product-detail');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
