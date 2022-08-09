@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Academic</a></li><li><a href="#">Students</a></li><li class="active">Profile</li></ol>
        <!-- ============================================================== -->
        <!-- start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Student</strong> Profile</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form method="post" action="{{asset('/saveProfile')}}" class="form-horizontal" role="form" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">First Name <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="first_name" value="{{old('first_name', $items->first_name)}}" class="form-control" placeholder="First Name">
                                        @if($errors->has('first_name'))
                                            <div class="text-red">{{$errors->first('first_name')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Father Name <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="father_name" value="{{old('father_name', $items->father_name)}}" class="form-control" placeholder="Father Name">
                                        @if($errors->has('father_name'))
                                            <div class="text-red">{{$errors->first('father_name')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nationality</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nationality" value="{{old('nationality', $items->nationality)}}" class="form-control" placeholder="Nationality">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Last Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="last_name" value="{{old('last_name', $items->last_name)}}" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Mother Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="mother_name" value="{{old('mother_name', $items->mother_name)}}" class="form-control" placeholder="Mother Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Gender</label>
                                    <div class="col-sm-8">
                                        <div class="radio iradio">
                                            <label>
                                                <input type="radio" name="gender" value="{{old('gender', $items->gender)}}" {{old('gender') == 'Male' ? 'checked' : ''}} checked>
                                                Male
                                                &nbsp; &nbsp;<input type="radio" name="gender" value="{{old('gender', $items->gender)}}"  {{old('gender') == 'Female' ? 'checked' : ''}}>
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
                                        <input type="text" name="phone" value="{{old('phone', $items->phone_number)}}" class="form-control" placeholder="Phone number">
                                        @if($errors->has('phone'))
                                            <div class="text-red">{{$errors->first('phone')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Email Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="email" value="{{old('email', $items->email_address)}}" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">State <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="state" value="{{old('state' , $items->permanent_state)}}" class="form-control" placeholder="State">
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
                                        <input type="text" name="parent_number" value="{{old('parent_number', $items->parent_number)}}" class="form-control" placeholder="Parent Number">
                                        @if($errors->has('parent_number'))
                                            <div class="text-red">{{$errors->first('parent_number')}}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="permanent_address" value="{{old('permanent_address', $items->permanent_address)}}" class="form-control" placeholder="Permanent Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">City <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="city" value="{{old('city', $items->permanent_city)}}" class="form-control" placeholder="City">
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
                                    <a href="{{asset('/home')}}" class="btn btn-danger">Cancel</a>
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
                <script type="text/javascript">
                    // =============================================== promotion image preview

                    $('#passport_photo').click(function(){
                        alert('ss');
                        //readURL(this);
                    });

                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#primgpreview').attr('src', e.target.result);
                            }

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>
                <script type="text/javascript">
                    $('#course').on('change', function(e){
                        console.log(e);
                        var course_id = $(this).val();
                        var course_du = " ";
                        var course_fee = " ";
                        $.ajax({
                            type: 'get',
                            url: '{{ asset("academic/ajaxcoursedetail")}}',
                            data: {'id':course_id},
                            success: function(data){
                                $('#course_duration').val('');
                                $('#fees').val('');
                                $('#course_duration').val(data[0].course_duration);
                                $('#fees').val(data[0].course_fees);
                            },
                            error: function(){

                            }
                        });
                    });
                </script>
                <!-- Page Specific JS Libraries -->
                <script src="{{asset('assets/libs/bootstrap-inputmask/inputmask.js')}}"></script>
                <script src="{{asset('assets/libs/summernote/summernote.js')}}"></script>
                <script src="{{asset('assets/js/pages/forms.js')}}"></script>
            <!--<script src="{{asset('assets/js/webcam.min.js')}}"></script>-->
                <script language="JavaScript">
                    /*
                    Webcam.set({
                        width: 320,
                        height: 240,
                        image_format: 'jpeg',
                        jpeg_quality: 90,
                        dest_width: 320,         // size of captured image
                        dest_height: 240,        // these default to width/height
                        crop_width: 320,         // size of captured image
                        crop_height: 240,        // these default to width/height */
                    /*constraints: {
            width: { exact: 450},
            height: { exact: 450}
        }*/
                    /* });
                     Webcam.attach( '#my_camera' );*/
                </script>
                <!-- Code to handle taking the snapshot and displaying it locally -->
                <script language="JavaScript">
                    function take_snapshot() {
                        // take snapshot and get image data
                        Webcam.snap( function(data_uri) {
                            // display results in page
                            document.getElementById('my_camera').innerHTML = '<img src="'+data_uri+'" name="passport_photo" id="passport_photo"/>';
                            var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');

                            document.getElementById('namafoto').value = raw_image_data;
                        } );
                    }
                </script>
    @endpush


