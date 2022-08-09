@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li><a href="{{asset('/test')}}">Test</a></li><li class="active">Add Test</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Add</strong> New Test</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form class="form-horizontal" role="form" action="{{asset('test')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Test Title <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="test_name" value="{{old('test_name')}}" class="form-control" placeholder="Test Name">
                                            @if($errors->has('test_name'))
                                                <div class="text-red">{{$errors->first('test_name')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label">Course <span class="text-red"></span></label>
                                        <div class="col-sm-8">
                                            <select name="course" class="form-control">
                                                <option value="">Please select Course</option>
                                                @foreach($courses as $type)
                                                    <option value="{{$type->name}}" {{old('course') == $type->name ? 'selected' : ''}}>{{$type->name}}</option>
                                                @endforeach
                                                <option value="N/A" style="color: red !important;">Not Applicable</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Test Date <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="test_date" value="{{old('test_date')}}" class="form-control datepicker-input" placeholder="Test Date" readonly=>
                                            @if($errors->has('test_date'))
                                                <div class="text-red">{{$errors->first('test_date')}}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Begin Time <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input name="start_time" value="{{old('start_time')}}" type="text" class="form-control timepicker-input" placeholder="Start Time" readonly>
                                            @if($errors->has('start_time'))
                                                <div class="text-red">{{$errors->first('start_time')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Total Questions<span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="total_question" value="{{old('total_question')}}" class="form-control" placeholder="Total no of Question">
                                            @if($errors->has('total_question'))
                                                <div class="text-red">{{$errors->first('total_question')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Correct Ans Marks<span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="correct_marks" value="{{old('correct_marks')}}" class="form-control" placeholder="Correct Ans Marks">
                                            @if($errors->has('correct_marks'))
                                                <div class="text-red">{{$errors->first('correct_marks')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc" class="col-sm-4 control-label">Course Description <span class="text-red"></span></label>
                                        <div class="col-sm-8">
                                        <!--<input type="text" name="course_fees" value="{{old('course_fees')}}" class="form-control" placeholder="Course Fees">-->
                                            <textarea name="desc" id="desc" cols="30" rows="3" class="form-control" placeholder="Course Description"></textarea>
                                            @if($errors->has('desc'))
                                                <div class="text-red">{{$errors->first('desc')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--
                                    <div class="form-group">
                                        <label for="subject" class="col-sm-4 control-label">Subject <span class="text-red"></span></label>
                                        <div class="col-sm-8">
                                            <select name="subject" class="form-control">
                                                <option value="">Please select Subject</option>
                                                @foreach($subjects as $type)
                                                    <option value="{{$type->name}}" {{old('subject') == $type->name ? 'selected' : ''}}>{{$type->name}}</option>
                                                @endforeach
                                                <option value="N/A" style="color: red !important;">Not Applicable</option>
                                            </select>
                                        </div>
                                    </div>
                                    -->
                                        <div class="form-group">
                                            <label for="input-text" class="col-sm-4 control-label">Duration (in Mins) <span class="text-red">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="number" name="test_duration" value="{{old('test_duration')}}" class="form-control" placeholder="Test Duration">
                                                @if($errors->has('test_duration'))
                                                    <div class="text-red">{{$errors->first('test_duration')}}</div>
                                                @endif
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">End Time <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="end_time" value="{{old('end_time')}}" class="form-control timepicker-input" placeholder="End Time" readonly>
                                            @if($errors->has('end_time'))
                                                <div class="text-red">{{$errors->first('end_time')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">No of Options<span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="total_option" value="{{old('total_option')}}" class="form-control" placeholder="NO of Options as Answer">
                                            @if($errors->has('total_option'))
                                                <div class="text-red">{{$errors->first('total_option')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Wrong Ans Marks<span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="wrong_marks" value="{{old('wrong_marks')}}" class="form-control" placeholder="Wrong Ans Marks">
                                            @if($errors->has('wrong_marks'))
                                                <div class="text-red">{{$errors->first('wrong_marks')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-12 text-center center-block">
                                <a href="{{asset('course')}}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of your awesome content -->

            <!-- Footer Start -->
@endsection

