@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li><a href="{{asset('/course')}}">Course</a></li><li class="active">Edit Course</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Edit</strong> Course</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form class="form-horizontal" role="form" action="{{asset('course/'.$items->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Course Name <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="course_name" value="{{old('course_name', $items->name)}}" class="form-control" placeholder="Course Name">
                                            @if($errors->has('course_name'))
                                                <div class="text-red">{{$errors->first('course_name')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">No. of Seats <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="no_of_seat" value="{{old('no_of_seat', $items->seats)}}" class="form-control" placeholder="No. of Seats">
                                            @if($errors->has('no_of_seat'))
                                                <div class="text-red">{{$errors->first('no_of_seat')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc" class="col-sm-4 control-label">Course Description <span class="text-red"></span></label>
                                        <div class="col-sm-8">
                                        <!--<input type="text" name="course_fees" value="{{old('course_fees')}}" class="form-control" placeholder="Course Fees">-->
                                            <textarea name="desc" id="desc" cols="30" rows="3" class="form-control" placeholder="Course Description">{{ $items->description }}</textarea>
                                            @if($errors->has('desc'))
                                                <div class="text-red">{{$errors->first('desc')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label" style="margin-top: 75px !important;">Upload Course Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" id="course-img" name="course_image" value="{{old('course_image')}}" class="btn btn-default" title="Select Course Image">
                                            <img src="{{ asset("storage/course_images/$items->course_image") }}" alt="" class="img-thumbnail" id="course-image" style="width: 157px !important;height: 100px !important;border: 1px solid #7a868f;margin-top: 12px;"/>
                                            <input type="hidden" name="old_course_image" value="{{ $items->course_image }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Course Duration <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="course_duration" value="{{old('course_duration', $items->duration)}}" class="form-control" placeholder="Course Duration">
                                            @if($errors->has('course_duration'))
                                                <div class="text-red">{{$errors->first('course_duration')}}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Course Fees <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="course_fees" value="{{old('course_fees', $items->fee)}}" class="form-control" placeholder="Course Fees">
                                            @if($errors->has('course_fees'))
                                                <div class="text-red">{{$errors->first('course_fees')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-text" class="col-sm-4 control-label">Course Category <span class="text-red">*</span></label>
                                        <div class="col-sm-8">
                                            <select name="course_category" class="form-control">
                                                @foreach($types as $type)
                                                    <option value="{{$type->name}}" {{old('course_category',$items->category) == $type->name ? 'selected' : ''}}>{{$type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-12 text-center center-block">
                                <a href="{{asset('course')}}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of your awesome content -->

            <!-- Footer Start -->
@endsection
@push('ExtraJs')
    <script>
        var BASE_URL = '<?= URL::to('/'); ?>';
        console.log('BASE URL : '+BASE_URL);
        $(document).ready(function(){
            $('#course-img').change(function(){
                var input = this;
                var url = $(this).val();
                console.log(url);
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
                {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#course-image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
                else
                {
                    $('#img').attr('src', '/assets/no_preview.png');
                }
            });
        });
    </script>
@endpush