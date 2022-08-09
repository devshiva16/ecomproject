@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li><a href="{{asset('/module')}}">Module</a></li><li class="active">Edit Module</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Edit</strong> Module</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form class="form-horizontal" role="form" action="{{asset('module/'.$item->id)}}" method="post">
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Module Name <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="module_name" value="{{old('module_name',$item->name)}}" class="form-control" placeholder="Module Name">
                                        @if($errors->has('module_name'))
                                            <div class="text-red">{{$errors->first('module_name')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label"> Module Type <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <label for="r1" class="col-sm-6">Test Module <input type="radio" id="r1" value="1" name="module_type" class="radio-inline" {{old('module_type', $item->module_type) == 1 ? 'checked' : ''}}></label>
                                        <label for="r2" class="col-sm-6">Genera Module <input type="radio" id="r2" value="2" name="module_type" class="radio-inline" {{old('module_type', $item->module_type) == 2 ? 'checked' : ''}}></label>
                                        @if($errors->has('module_type'))
                                            <div class="text-red">{{$errors->first('module_type')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label"> Course <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <select name="course" id="select-course" class="form-control" {{ $item->module_type == 2 ? 'disabled' : '' }}>
                                            <option value="">Select Course</option>
                                            @foreach($courses as $type)
                                                <option value="{{$type->id}}" {{old('course', $item->course_id) == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('course'))
                                            <div class="text-red">{{$errors->first('course')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-12 text-center center-block">
                                <a href="{{asset('module')}}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of your awesome content -->
            <script>
                $(document).ready(function () {
                    $('.radio-inline').on('click',function (e) {
                        if($(this).val()==2){
                            $('#select-course').attr('disabled',true);
                        }
                        if($(this).val()==1){
                            $('#select-course').attr('disabled',false);
                        }
                    })
                })
            </script>
            <!-- Footer Start -->
@endsection

