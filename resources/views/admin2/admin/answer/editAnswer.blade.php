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
            <li><a href="#">Home</a></li><li><a href="{{asset('/answer')}}">answer</a></li><li class="active">Edit Answer</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Edit</strong> Answer</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form class="form-horizontal" role="form" action="{{asset('answer/'.$items->id)}}" method="post">
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label">Answer Title<span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="ans_title" value="{{old('ans_title' , $items->title)}}" class="form-control" placeholder="Answer Title for Reference">
                                            @if($errors->has('ans_title'))
                                                <div class="text-red">{{$errors->first('ans_title')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label">Select Question <span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <select name="question" class="form-control">
                                                <option value="">Please select Question</option>
                                                @foreach($questions as $type)
                                                    <option value="{{$type->id}}" {{old('question', $items->question_id) == $type->id ? 'selected' : ''}}>{{$type->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label">Select Type <span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <select name="qtype" class="form-control">
                                                <option value="">select Answer Type</option>
                                                <option value="Right" {{old('qtype', $items->status) == 'Right' ? 'selected' : ''}}>Right</option>
                                                <option value="Wrong" {{old('qtype', $items->status) == 'Wrong' ? 'selected' : ''}}>Wrong</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label" style="margin-bottom: 10px !important;">Create Answer ?<span class="text-red"> * </span></label>
                                        <br>
                                        <div class="col-sm-12">
                                            <textarea name="editor1">{{ $items->answer }}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'editor1' ,{
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
                                    <a href="{{asset('/answer')}}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <!-- End of your awesome content -->

            <!-- Footer Start -->
@endsection



