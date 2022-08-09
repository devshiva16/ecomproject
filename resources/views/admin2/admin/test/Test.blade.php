@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li class="active">Test List</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Page Heading End-->
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>All</strong> Test</h2>
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

                                            <form action="{{asset('test/create')}}" method="post">
                                                {{csrf_field()}}
                                                <a class="btn btn-success" href="{{asset('/test/create')}}"><i class="fa fa-plus-circle"></i> Add New Test</a>
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
                                        <th style="text-align: center !important;">Sno</th>
                                        <th>Title</th>
                                        <th>Course</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Duration</th>
                                        <th>Question</th>
                                        <th>Option</th>
                                        <th>Correct marks</th>
                                        <!--<th>Wrong marks</th>-->
                                        <th data-sortable="false" style="text-align: center !important;">Option</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td style="text-align: center !important;">{{$loop->index + 1}}</td>
                                            <td><strong>{{ $item->name }}</strong></td>
                                            <td>{{ $item->course }}</td>
                                            <td>{{ $item->subject }}</td>
                                            <td>{{ date('d-m-Y',strtotime($item->test_date)) }}</td>
                                            <td>{{ $item->duration }}</td>
                                            <td>{{ $item->no_of_questions }}</td>
                                            <td>{{ $item->no_of_options }}</td>
                                            <td>{{ $item->correct_ans_marks }}</td>
                                            <!--<td>{{ $item->wrong_ans_marks }}</td>-->
                                            <td style="text-align: center !important;">
                                                <div class="btn-group btn-group-xs">
                                                    <form method="post" action="{{asset('test/'.$item->id)}}">
                                                        {{csrf_field()}}
                                                        <a data-toggle="tooltip" href="{{ asset('/test/'.$item->id.'/edit') }}" title="Edit" class="btn btn-default"><i class="fa fa-edit" style="color: green !important;"></i></a>
                                                        {{method_field('DELETE')}}
                                                        <button data-toggle="tooltip" type="submit" title="Delete" onclick="return ConfirmDelete()" class="btn btn-default">
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

