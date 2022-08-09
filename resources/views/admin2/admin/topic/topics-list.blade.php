@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li class="active">Topic List</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Page Heading End-->
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>All</strong> Topics</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="data-table-toolbar">
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="toolbar-btn-action">

                                            <form action="{{asset('topic/create')}}" method="post">
                                                {{csrf_field()}}
                                                <a class="btn btn-success" href="{{asset('/topic/create')}}"><i class="fa fa-plus-circle"></i> Add New Topic</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        @include('MyLayouts.message')
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="datatables-1" data-sortable class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th style="text-align: center !important;">No</th>
                                        <th style="text-align: center !important;">Topic</th>
                                        <th style="text-align: center !important;">Subject</th>
                                        <th data-sortable="false" style="text-align: center !important;">Option</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($topics as $item)
                                        <tr>
                                            <td style="text-align: center !important;">{{$loop->index + 1}}</td>
                                            <td style="text-align: center !important;"><strong>{{ $item->name }}</strong></td>
                                            <td style="text-align: center !important;">{{ getSubjectName($item->subject) }}</td>
                                            <td style="text-align: center !important;">
                                                <div class="btn-group btn-group-xs">
                                                    <form method="post" action="{{asset('topic/'.$item->id)}}">
                                                        {{csrf_field()}}
                                                        <a data-toggle="tooltip" href="{{ asset('/topic/'.$item->id.'/edit') }}" title="Edit" class="btn btn-default btn-xs"><i class="fa fa-edit" style="color: green !important;"></i></a>
                                                        {{method_field('DELETE')}}
                                                        <button data-toggle="tooltip" type="submit" title="Delete" onclick="return ConfirmDelete()" class="btn btn-default btn-xs">
                                                            <i class="fa fa-trash-o" style="color: red !important;"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            @endsection

            @push('ExtraCss')
                <link href="{{asset('assets/libs/jquery-datatables/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css')}}" rel="stylesheet" type="text/css" />
            @endpush
            @push('DeleteConfirmJs')
                <script type="text/javascript" src="{{ asset('js/deleteconfirm.js')}}"></script>
                <!-- Page Specific JS Libraries -->
                <script src="{{asset('assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
                <script src="{{asset('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
                <script src="{{asset('assets/js/pages/datatables.js')}}"></script>
    @endpush

