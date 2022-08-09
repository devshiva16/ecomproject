@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li><a href="{{asset('/subject')}}">Category</a></li><li class="active">Add Subject</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Add</strong> New Subject</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form class="form-horizontal" role="form" action="{{asset('subject')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Subject Name <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="subject_name" value="{{old('subject_name')}}" class="form-control" placeholder="Subject Name">
                                        @if($errors->has('subject_name'))
                                            <div class="text-red">{{$errors->first('subject_name')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-12 text-center center-block">
                                <a href="{{asset('subject')}}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of your awesome content -->

            <!-- Footer Start -->
@endsection