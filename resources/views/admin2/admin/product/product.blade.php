@extends('admin2.MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li class="active">Product List</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Page Heading End-->
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>All</strong> Product</h2>
                            <div class="additional-btn">
                                <li class="nk-block-tools-opt">
                                    {{-- <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a> --}}
                                    <a href="" class="btn btn-danger mb-2">Add Product</a> 
                                </li>
                                {{-- <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a> --}}
                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="data-table-toolbar">
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="toolbar-btn-action">

                                            {{-- <form action="{{asset('category/create')}}" method="post">
                                                {{csrf_field()}}
                                                <a class="btn btn-success" href="{{asset('/category/create')}}"><i class="fa fa-plus-circle"></i> Add New Category</a>
                                            </form> --}}


                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- <div class="col-md-12">
                                        @include('MyLayouts.message')
                                    </div> --}}
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="datatables-1" data-sortable class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center !important;">Product Name</th>
                                        <th style="text-align: center !important;">Code</th>
                                        <th style="text-align: center !important;">Short Name</th>
                                        <th style="text-align: center !important;">Price</th>
                                        <th style="text-align: center !important;">Unit</th>
                                        <th style="text-align: center !important;">Weight</th>
                                        <th style="text-align: center !important;">Category</th>
                                        <th data-sortable="false" style="text-align: center !important;">Option</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        {{-- @foreach($category as $item) --}}
                                        <tr>
                                            {{-- <td style="text-align: center !important;">{{$loop->index + 1}}</td>
                                            <td style="text-align: center !important;"><strong>{{ $item->name }}</strong></td> --}}
                                            <td style="text-align: center !important;">product name</td>
                                            <td style="text-align: center !important;">code</td>
                                            <td style="text-align: center !important;">short name</td>
                                            <td style="text-align: center !important;">price</td>
                                            <td style="text-align: center !important;">unit</td>
                                            <td style="text-align: center !important;">weight</td>
                                            <td style="text-align: center !important;">category</td>
                                            <td style="text-align: center !important;">
                                                <div class="btn-group btn-group-xs">
                                                    {{-- <form method="post" action="{{asset('category/'.$item->id)}}"> --}}
                                                        {{csrf_field()}}
                                                        <a data-toggle="tooltip" href="#" title="Edit" class="btn btn-default"><i class="fa fa-edit" style="color: green !important;"></i></a>
                                                        {{method_field('DELETE')}}
                                                        <button data-toggle="tooltip" type="submit" title="Delete" onclick="return ConfirmDelete()" class="btn btn-default">
                                                            <i class="fa fa-trash-o" style="color: red !important;"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>

           
        </div>
            @endsection

            @push('ExtraCss')
                <link href="{{asset('admin2/assets/libs/jquery-datatables/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('admin2/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css')}}" rel="stylesheet" type="text/css" />
            @endpush
            @push('DeleteConfirmJs')
                <script type="text/javascript" src="{{ asset('js/deleteconfirm.js')}}"></script>
                <!-- Page Specific JS Libraries -->
                <script src="{{asset('admin2/assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('admin2/assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
                <script src="{{asset('admin2/assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
                <script src="{{asset('admin2/assets/js/pages/datatables.js')}}"></script>
    @endpush