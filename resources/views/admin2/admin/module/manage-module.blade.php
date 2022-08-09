@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li><a href="{{asset('/module')}}">Module</a></li><li class="active">Manage Module</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Manage</strong> Module | <span class="btn-xs"><a href="{{ asset('/module/'.$item->id.'edit') }}">Edit</a></span></h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                        <div class="row">
                            <div class="col-md-12">
                                @include('MyLayouts.message')
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Name : </label>
                                    <div class="col-sm-6">
                                        <label for="input-text" class="control-label"><strong>{{ $item->name }}</strong></label>
                                    </div>
                                </div>
                                @php
                                    {{ $mtype = ''; if($item->module_type==1){ $mtype = 'Test Module';} if($item->module_type==2){ $mtype = 'General Module';} }}
                                @endphp
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Type :  </label>
                                    <div class="col-sm-6">
                                        <label for="input-text" class="control-label"><strong>{{ $mtype }}</strong></label>
                                    </div>
                                </div>
                                @if($item->module_type==1)
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Test  :  </label>
                                        <div class="col-sm-6">
                                            <label for="input-text" class="control-label"><strong>{{ getCourseName($item->course_id) }}</strong></label>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-5" style="margin-top: -40px !important;">
                                <h6 class="text-center"><strong>Add Questions to Module</strong></h6>
                                <hr>
                                <form class="form-horizontal" role="form" action="{{asset('AddQuestionToModule')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="module_id" value="{{ $item->id }}">
                                <div class="form-group">
                                    <label for="select-subject" class="col-sm-4 control-label">Select Subject <span class="text-red"> * </span></label>
                                    <div class="col-sm-7">
                                        <select id="select-subject" name="subject" class="form-control">
                                            <option value="">Select Subject</option>
                                            @foreach($subjects as $type1)
                                                <option value="{{$type1->id}}" {{old('test',) == $type1->id ? 'selected' : ''}}>{{$type1->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-topic" class="col-sm-4 control-label">Select Topic <span class="text-red"> * </span></label>
                                    <div class="col-sm-7">
                                        <select id="select-topic" name="topic" class="form-control">
                                            <option value="">Select Topic</option>
                                            @foreach($topics as $type2)
                                                <option value="{{$type2->id}}" {{old('test',) == $type2->id ? 'selected' : ''}}>{{$type2->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="qlist" style="display: none;">
                                    <label for="select-question" class="col-sm-4 control-label">Select Questions <span class="text-red"> * </span></label>
                                    <div class="col-sm-7">
                                        <select id="select-question" name="questions[]" class="form-control" multiple>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="qlist2" style="display: none;">
                                    <label for="select-question" class="col-sm-5 control-label"> | Or No of Questions </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="no_of_questions" value="{{old('no_of_questions')}}" class="form-control" placeholder="No Of Questions">
                                    </div>
                                </div>
                                <div class="form-group" id="qlist3" style="display: none;">
                                        <div class="col-sm-11">
                                        <Button type="submit" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add To Module</Button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-12">
                                <h6><strong>Questions Added To Module</strong></h6>
                                <hr>
                                <div class="responsive">
                                    <table id="datatables-1" data-sortable class="table table-hover table-bordered table-striped">
                                        <thead>
                                            <th style="width: 10% !important;">Qno</th>
                                            <th style="width: 20% !important;">Topic</th>
                                            <th style="width: 55% !important;">Title</th>
                                            <th style="width: 15% !important;">#</th>
                                        </thead>
                                        <tbody>
                                        @foreach($questions as $ques)
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{ $ques['topic'] }}</td>
                                                <td>{{ $ques['title'] }}</td>
                                                <td>
                                                    <form method="post" action="{{asset('RemoveQuestion/'.$ques['qid'])}}">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                        <button type="button" data-toggle="tooltip" id="viewQ{{ $ques['quesID'] }}" title="View Question" class="btn btn-default btn-xs view-question">
                                                            <i class="fa fa-eye" aria-hidden="true" style="color: green !important;"></i>
                                                        </button>
                                                        <a data-toggle="tooltip" href="{{ asset('RemoveQuestion/'.$item->id.'/'.$ques['qid']) }}" title="Remove Question" class="btn btn-default btn-xs">
                                                            <i class="fa fa-trash-o" aria-hidden="true" style="color: red !important;"></i>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form>
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title text-center"><span style="font-size: .7em !important; font-weight: bold !important;">Question with Explanation and Options</span></h4>

                                        </div>
                                        <div class="modal-body" style="height: 500px !important; overflow-x: hidden !important;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 id="q-title"><span style="font-size: .8em !important; font-weight: bold !important;">Question Title</span> | <span id="qe" class="" style=" font-size: 0.8em !important; font-weight: bold;"></span></h5>
                                                    <hr>
                                                </div>
                                                <div class="col-md-12" id="q-desc" style="/*height: 80px !important; overflow-x: hidden !important;*/">
                                                    Question Description
                                                    lfdjldjfl
                                                    <br>
                                                    <p>jsdflllsjdf</p>
                                                    <p>uiioernlweril
                                                        <Br>
                                                    </p>
                                                    lfdjldjfl
                                                    <br>
                                                    <p>jsdflllsjdf</p>
                                                    <p>uiioernlweril
                                                        <Br>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <h5><span style="font-size: .8em !important; font-weight: bold !important;">Explanation</span></h5>
                                                    <hr>
                                                </div>
                                                <div class="col-md-12" id="q-expl"  style="/*height: 80px !important; overflow-x: hidden !important;*/">
                                                    Question Explanation
                                                    lfdjldjfl
                                                    <br>
                                                    <p>jsdflllsjdf</p>
                                                    <p>uiioernlweril
                                                        <Br>
                                                    </p>
                                                    lfdjldjfl
                                                    <br>
                                                    <p>jsdflllsjdf</p>
                                                    <p>uiioernlweril
                                                        <Br>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <h5><span style="font-size: .8em !important; font-weight: bold !important;">Options</span></h5>
                                                    <hr>
                                                </div>
                                                <div class="col-md-12" style="/*height: 100px !important; overflow-x: hidden !important;*/">
                                                    <ol id="ans-opt" type="a">
                                                        <li> Title <br>
                                                            <div>
                                                                <p>this testing the question</p>
                                                                <img src="abc.png" alt="abc" />
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div>
                                                                <p>this testing the question</p>
                                                                <img src="abc.png" alt="abc" />
                                                            </div>
                                                        </li>
                                                        <li> Title <br>
                                                            <div>
                                                                <p>this testing the question</p>
                                                                <img src="abc.png" alt="abc" />
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div>
                                                                <p>this testing the question</p>
                                                                <img src="abc.png" alt="abc" />
                                                            </div>
                                                        </li>
                                                        <li> Title <br>
                                                            <div>
                                                                <p>this testing the question</p>
                                                                <img src="abc.png" alt="abc" />
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- End of your awesome content -->
            <script>
                $(document).ready(function () {
                    $("#select-subject").on("change",function (e) {
                        var subject_id = $(this).val();
                        console.log("Subject ID : "+subject_id);

                        $("#qlist").hide();
                        $("#qlist2").hide();
                        $("#qlist3").hide();

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('input[name="_token"]').val()
                            }
                        });

                        $.ajax({
                            type: "POST",
                            url: "/getTopics",
                            data: {sid : subject_id},
                            success: function (data) {
                                console.log(data);
                                $("#select-topic").html(data);

                            }
                        })
                    });
                    $("#select-topic").on("change",function (e) {
                        var topic_id = $(this).val();
                        console.log("Topic ID : "+topic_id);

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('input[name="_token"]').val()
                            }
                        });

                        $.ajax({
                            type: "POST",
                            url: "/getQuestions",
                            data: {sid : topic_id},
                            success: function (data) {
                                console.log(data);
                                $("#select-question").html(data);
                                $("#qlist").show();
                                $("#qlist2").show();
                                $("#qlist3").show();
                            }
                        });
                    });

                });
                $("body").on("click","#datatables-1 .view-question",function(e){
                    var id= e.target.id;
                    var idno = id.replace( /^\D+/g, '');

                    console.log("ID : "+id);
                    console.log("IdNo : "+idno);

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('input[name="_token"]').val()
                        }
                    });

                    $.ajax({
                        type: "GET",
                        url: "/GetQuestionData/"+idno,
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            var urlstr = "{{ asset('/question') }}";
                            console.log(urlstr);
                            $('#myModal #qe').html('<a href="'+urlstr+'/'+data.question['id']+'/edit'+'" target="_blank"><span><i class="fa fa-pencil" aria-hidden="true"></i></span> Edit</a>')
                            $('#myModal').modal('show');
                        }
                    });


                });
            </script>
            <!-- Footer Start -->
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


