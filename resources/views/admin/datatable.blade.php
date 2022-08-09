@extends('admin.layout')

@section('content')

<div class="components-preview wide-xl mx-auto">
        
    <div class="nk-block nk-block-lg">
        
    </div> <!-- nk-block -->
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content col-md-6">
                <h4 class="nk-block-title">Data Table with Export<a href="{{ asset('product/create')}}" type="button" class="btn btn-primary pull-right" style="position:absolute;right:10px">Add Product</a></h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init-export nowrap table" data-export-title="Export">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->
    <div class="nk-block nk-block-lg">
      
</div><!-- .components-preview -->

@endsection