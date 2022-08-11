@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl mx-auto">
        
    <div class="nk-block nk-block-lg">
        
    </div> <!-- nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content col-md-6">
                <h4 class="nk-block-title">City List<a href="{{ asset('city/create')}}" type="button" class="btn btn-primary pull-right" style="position:absolute;right:10px">Add City</a></h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init-export nowrap table" data-export-title="Export">
                    <thead>
                                                    
                        <tr>
                            <th>City Name</th>
                            <th>State Name</th>
                            <th>Pincode</th>
                        </tr>
                        
                    </thead>
                    <tbody>

                        @foreach ($city_list as $data)

                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->state_id}}</td>
                            <td>{{$data->pincode}}</td>
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