<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SubCategory::with('category')->get();
        // dd($data);
        return view('admin.product.sub-category-list',['subcategorylist'=>$data]);
    }

    /**
     * Get List of Sub Category based on Category Id
     * @return \Illuminate\Http\Response
     */
    public function GetSubCategoriesByCategoryId(Request $request){
        // dd($request);
        $list = SubCategory::where('category_id',$request->categoryid)->get();
        return $list;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorylist = Category::all();
        return view('admin.product.add-subcategory',['categorylist'=>$categorylist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $subcategory = new SubCategory();
        $subcategory->category_id = $request->category;
        $subcategory->subcategory_name = $request->name;
        $subcategory->status=true;
        $subcategory->is_delete=false;
        $subcategory->save();


         // $data->save();
         return redirect('/subcategory');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        $categorylist = Category::all();
        $subcat = SubCategory::find($subcategory->id);
        // dd($subcat);
        return view('admin.product.edit-subcategory',['subCategory'=>$subcat,'categorylist'=>$categorylist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $update_data = [
            'category_id'=>$request->category,
            'subcategory_name'=>$request->name
        ];

        $subcategory->update($update_data);

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }

    public function changeStatus(Request $request){
        $category = SubCategory::where('id',$request->id)->first();
        if($category){
            $category->status = !$category->status;
            $category->save();
            return true;
        }
        else{
            return false;
        }
    }
}
