@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li><a href="#">New</a></li><li class="active">student</li></ol>
        <!-- ============================================================== -->
        <!-- start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>New</strong> Student</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form method="post" action="{{asset('/student')}}" class="form-horizontal" role="form" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">First Name <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="first_name" value="{{old('first_name')}}" class="form-control" placeholder="First Name">
                                        @if($errors->has('first_name'))
                                            <div class="text-red">{{$errors->first('first_name')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Father Name <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="father_name" value="{{old('father_name')}}" class="form-control" placeholder="Father Name">
                                        @if($errors->has('father_name'))
                                            <div class="text-red">{{$errors->first('father_name')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nationality</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nationality" value="{{old('nationality')}}" class="form-control" placeholder="Nationality">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Last Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="last_name" value="{{old('last_name')}}" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Mother Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="mother_name" value="{{old('mother_name')}}" class="form-control" placeholder="Mother Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Gender</label>
                                    <div class="col-sm-8">
                                        <div class="radio iradio">
                                            <label>
                                                <input type="radio" name="gender" value="{{old('gender', 'Male')}}" {{old('gender') == 'Male' ? 'checked' : ''}} checked>
                                                Male
                                                &nbsp; &nbsp;<input type="radio" name="gender" value="{{old('gender', 'Female')}}"  {{old('gender') == 'Female' ? 'checked' : ''}}>
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Phone Number <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Phone number">
                                        @if($errors->has('phone'))
                                            <div class="text-red">{{$errors->first('phone')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Email Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">State <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="state" value="{{old('state')}}" class="form-control" placeholder="State">
                                        @if($errors->has('state'))
                                            <div class="text-red">{{$errors->first('state')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Parent Number <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="parent_number" value="{{old('parent_number')}}" class="form-control" placeholder="Parent Number">
                                        @if($errors->has('parent_number'))
                                            <div class="text-red">{{$errors->first('parent_number')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Permanent Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="permanent_address" value="{{old('permanent_address')}}" class="form-control" placeholder="Permanent Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">City <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="city" value="{{old('city')}}" class="form-control" placeholder="City">
                                        @if($errors->has('city'))
                                            <div class="text-red">{{$errors->first('city')}}</div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <hr/>
                            <div class="row">
                                <div class="col-md-12 text-center center-block">
                                    <a href="{{asset('academic/students/')}}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save</button>

                                </div>
                            </div>
                    </form>
                </div>
            </div>
            @endsection

            @push('ExtraCss')
                <link href="{{asset('assets/css/bootstrap-select.css')}}" rel="stylesheet" />
                <link href="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('assets/libs/summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
            @endpush

            @push('ExtraJs')

                <!-- Page Specific JS Libraries -->
                <script src="{{asset('assets/libs/bootstrap-inputmask/inputmask.js')}}"></script>
                <script src="{{asset('assets/libs/summernote/summernote.js')}}"></script>
                <script src="{{asset('assets/js/pages/forms.js')}}"></script>
    @endpush


