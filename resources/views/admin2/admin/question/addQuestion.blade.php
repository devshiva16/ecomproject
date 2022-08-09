@extends('MyLayouts.master')
<style>
    th,td{
        text-align: center!important;
        font-size: 12px !important;
    }
</style>
@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li><a href="{{asset('/question')}}">Question</a></li><li class="active">Add Question</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Add</strong> New Question</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form class="form-horizontal" role="form" action="{{asset('question')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label">Question Title<span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="question_title" value="{{old('question_title')}}" class="form-control" placeholder="Question Title for Reference">
                                            @if($errors->has('question_title'))
                                                <div class="text-red">{{$errors->first('question_title')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label">Select Test <span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <select name="test" class="form-control">
                                                <option value="">Please select Test</option>
                                                @foreach($tests as $type)
                                                    <option value="{{$type->id}}" {{old('test') == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="select-subject" class="col-sm-4 control-label">Select Subject <span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <select id="select-subject" name="subject" class="form-control">
                                                <option value="">Please select Subject</option>
                                                @foreach($subjects as $type1)
                                                    <option value="{{$type1->id}}" {{old('test') == $type1->id ? 'selected' : ''}}>{{$type1->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="select-topic" class="col-sm-4 control-label">Select Topic <span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <select id="select-topic" name="topic" class="form-control">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label">Difficulty Level <span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="difficulty_level" value="{{old('difficulty_level')}}" class="form-control" placeholder="Enter Difficulty Level">
                                            @if($errors->has('difficulty_level'))
                                                <div class="text-red">{{$errors->first('difficulty_level')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label" style="margin-bottom: 10px !important;">Create Question ?<span class="text-red"> * </span></label>
                                        <br>
                                        <div class="col-sm-12">
                                            <textarea name="editor1"></textarea>
                                            <script>
                                                /*
                                                var path = CKEDITOR.basePath.split('/');
                                                path[ path.length-2 ] = 'upload_image';
                                                config.filebrowserUploadUrl = path.join('/').replace(/\/+$/, '');
                                                 */
                                                CKEDITOR.replace( 'editor1' ,{
                                                    extraPlugins: 'mathjax',
                                                    mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
                                                    height: 400,
                                                    filebrowserUploadUrl: "{{ asset('upload_image') }}"
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label" style="margin-bottom: 10px !important;">Enter Explanation <span class="text-red"> * </span></label>
                                        <br>
                                        <div class="col-sm-12">
                                            <textarea name="editor2"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'editor2' ,{
                                                    extraPlugins: 'mathjax',
                                                    mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
                                                    height: 400
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-12 text-center center-block">
                                <a href="{{asset('question')}}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
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

