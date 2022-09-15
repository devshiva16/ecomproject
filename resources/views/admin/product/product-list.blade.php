@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl mx-auto">
        
    <div class="nk-block nk-block-lg">
        
    </div> <!-- nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content col-md-6">
                <h4 class="nk-block-title">Product List<a href="{{ asset('product/create')}}" type="button" class="btn btn-primary pull-right" style="position:absolute;right:10px">Add Product</a></h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init-export nowrap table" data-export-title="Export">
                    <thead>
                                                    
                        <tr>
                            <th>Code / Sku</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Product Type</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                        
                    </thead>
                    <tbody>

                        @foreach ($product_list as $data)

                        <tr>
                            <td>{{$data->sku}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->category}}</td>
                            <td>{{$data->sub_category}}</td>
                            <td>{{$data->product_category}}</td>
                            <td>{{$data->weight}} {{$data->unit}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->status}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->
    <div class="nk-block nk-block-lg">
      
</div><!-- .components-preview -->

@endsection