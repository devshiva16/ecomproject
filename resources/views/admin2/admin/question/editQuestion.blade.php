@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li><a href="{{asset('/question')}}">Question</a></li><li class="active">Edit Question</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Edit</strong> Question</h2>
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
                            <div class="col-md-8">
                                <form class="form-horizontal" role="form" action="{{asset('question/'.$items->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <label for="course" class="col-sm-4 control-label">Question Title<span class="text-red"> * </span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="question_title" value="{{old('question_title',$items->title)}}" class="form-control" placeholder="Question Title for Reference">
                                        @if($errors->has('question_title'))
                                            <div class="text-red">{{$errors->first('question_title')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="course" class="col-sm-4 control-label">Select Test <span class="text-red"> * </span></label>
                                    <div class="col-sm-8">
                                        <select name="test" class="form-control">
                                            <option value="">Please select Test</option>
                                            @foreach($tests as $type)
                                                <option value="{{$type->id}}" {{old('test',$items->test_id) == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="select-subject" class="col-sm-4 control-label">Select Subject <span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <select id="select-subject" name="subject" class="form-control">
                                                <option value="">Select Subject</option>
                                                @foreach($subjects as $type1)
                                                    <option value="{{$type1->id}}" {{old('test', $items->module_id) == $type1->id ? 'selected' : ''}}>{{$type1->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select-topic" class="col-sm-4 control-label">Select Topic <span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <select id="select-topic" name="topic" class="form-control">
                                                <option value="">Select Topic</option>
                                                @foreach($topics as $type2)
                                                    <option value="{{$type2->id}}" {{old('test', $items->topic_id) == $type2->id ? 'selected' : ''}}>{{$type2->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label for="course" class="col-sm-4 control-label">Difficulty Level <span class="text-red"> * </span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="difficulty_level" value="{{old('difficulty_level',$items->difficulty)}}" class="form-control" placeholder="Enter Difficulty Level">
                                        @if($errors->has('difficulty_level'))
                                            <div class="text-red">{{$errors->first('difficulty_level')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="course" class="col-sm-4 control-label" style="margin-bottom: 10px !important;">Create Question ?<span class="text-red"> * </span></label>
                                    <br>
                                    <div class="col-sm-12" style="padding-left: 10px !important;">
                                        <textarea name="editor1">{{ $items->question }}</textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor1' ,{
                                                extraPlugins: 'mathjax',
                                                mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
                                                height: 400
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="course" class="col-sm-4 control-label" style="margin-bottom: 10px !important;">Enter Explanation <span class="text-red"> * </span></label>
                                    <br>
                                    <div class="col-sm-12" style="padding-left: 10px !important;">
                                        <textarea name="editor2">{{ $items->explanation }}</textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor2' ,{
                                                extraPlugins: 'mathjax',
                                                mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
                                                height: 400
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-12 center-block">
                                    <hr/>
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                    <a href="{{asset('question')}}" class="btn btn-danger pull-right" style="margin-right: 10px;">Cancel</a>
                                </div>
                                </form>
                            </div><!-- Ending Div Question Edit -->
                            <div class="col-md-4">
                                <h5 style="text-align: center !important;"><strong>Answers list</strong></h5>
                                <form action="{{asset('question/create')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="qid" value="{{ $items->id }}">
                                    <a class="btn btn-success btn-xs pull-right" href="{{asset('/answer/create?qid='.$items->id)}}"><i class="fa fa-plus-circle"></i> New Answer</a>
                                </form>
                                <hr>
                                <div class="table-responsive">
                                    <table id="datatables-1" data-sortable class="table table-hover table-striped" style="font-size: 11px !important;">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center !important;width: 40px !important;">Sno</th>
                                            <th>Answer</th>
                                            <th>Type</th>
                                            <th data-sortable="false" style="text-align: center !important;">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($answers as $ans)
                                            <tr>
                                                <td style="width: 40px !important;text-align: center !important;">{{ $loop->index + 1 }}</td>
                                                <td>{{ $ans->title }}</td>
                                                <td style="color : @if($ans->status=='Right'){{ 'green' }} @elseif ($ans->status=='Wrong') {{ 'red' }}
                                                @endif !important" >{{ $ans->status }}</td>
                                                <td style="text-align: center !important;">
                                                    <div class="btn-group btn-group-xs">
                                                        <form method="post" action="{{asset('answer/'.$ans->id)}}">
                                                            {{csrf_field()}}
                                                            <!--<a data-toggle="tooltip" href="#" title="{{ $ans->title }}" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>-->
                                                            <a data-toggle="tooltip" href="{{ asset('/answer/'.$ans->id.'/edit') }}" title="Edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                                                            {{ method_field('DELETE') }}
                                                            <button data-toggle="tooltip" type="submit" title="Delete" onclick="return ConfirmDelete()" class="btn btn-default btn-xs">
                                                                <i class="fa fa-trash-o"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div>

                                    </div>

                                </div>
                            </div>
                           </div>
                        <hr/>


                </div>
            </div>
            <!-- End of your awesome content -->
            <script>
                $(document).ready(function () {
                    $("#select-subject").on("change",function (e) {
                        var subject_id = $(this).val();
                        console.log("Subject ID : "+subject_id);

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
                });
            </script>
            <!-- Footer Start -->
@endsection


