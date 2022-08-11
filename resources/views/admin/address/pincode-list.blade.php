@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl mx-auto">
        
    <div class="nk-block nk-block-lg">
        
    </div> <!-- nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content col-md-6">
                <h4 class="nk-block-title">Pincode List<a href="{{ asset('pincode/create')}}" type="button" class="btn btn-primary pull-right" style="position:absolute;right:10px">Add Pincode</a></h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init-export nowrap table" data-export-title="Export">
                    <thead>
                                                    
                        <tr>
                            <th>Product Name</th>
                            <th>City Pincode</th>
                        </tr>
                        
                    </thead>
                    <tbody>

                        @foreach ($pincode_list as $data)

                        <tr>
                            <td>{{$data->pincode}}</td>
                            <td>{{$data->product_id}}</td>
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