
@extends('MyLayouts.master')

@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li><a href="{{asset('/topic')}}">Topic</a></li><li class="active">Edit Topic</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Edit</strong> Topic</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form class="form-horizontal" role="form" action="{{asset('topic/'.$item->id)}}" method="post">
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="course" class="col-sm-4 control-label">Select Subject <span class="text-red"> * </span></label>
                                    <div class="col-sm-8">
                                        <select name="subject" class="form-control">
                                            <option value="">Please select Subject</option>
                                            @foreach($subjects as $type)
                                                <option value="{{$type->id}}" {{old('test',$item->subject) == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-4 control-label">Topic Name <span class="text-red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="topic_name" value="{{old('topic_name',$item->name)}}" class="form-control" placeholder="Topic Name">
                                        @if($errors->has('topic_name'))
                                            <div class="text-red">{{$errors->first('topic_name')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-12 text-center center-block">
                                <a href="{{asset('topic')}}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of your awesome content -->

            <!-- Footer Start -->
@endsection

