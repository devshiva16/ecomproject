@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl mx-auto">
        
    <div class="nk-block nk-block-lg">
        
    </div> <!-- nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content col-md-6">
                <h4 class="nk-block-title">Product Category<a href="{{ asset('category/create')}}" type="button" class="btn btn-primary pull-right" style="position:absolute;right:10px">Add Category</a></h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init-export nowrap table" data-export-title="Export">
                    <thead>
                                                    
                        <tr>
                            <th>Category Name</th>
                       {{-- <th>Address</th> --}}
                            {{-- <th>Status</th> --}}
                        </tr>
                        
                    </thead>
                    <tbody>

                        @foreach ($category_list as $data)

                        <tr>
                            <td>{{$data->name}}</td>
                            {{-- <td>{{$data->address_id}}</td> --}}
                            {{-- <td>{{$data->status}}</td> --}}
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