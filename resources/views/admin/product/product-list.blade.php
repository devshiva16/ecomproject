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
                            <th>Name</th>
                            <th>Code</th>
                            <th>Short Name</th>
                            <th>Price</th>
                            {{-- <th>Sale Price</th> --}}
                            <th>Unit</th>
                            <th>Weight</th>
                            <th>SKU</th>
                            <th>Category</th>
                            {{-- <th>Discription</th> --}}
                            <th>Discount</th>
                            <th>Status</th>
                        </tr>
                        
                    </thead>
                    <tbody>

                        @foreach ($product_list as $data)

                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->code}}</td>
                            <td>{{$data->short_name}}</td>
                            <td>{{$data->price}}</td>
                            {{-- <td>{{$data->sale_price}}</td> --}}
                            <td>{{$data->unit}}</td>
                            <td>{{$data->weight}}</td>
                            <td>{{$data->sku}}</td>
                            <td>{{$data->category}}</td>
                            {{-- <td>{{$data->discription}}</td> --}}
                            <td>{{$data->is_discount}}</td>
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