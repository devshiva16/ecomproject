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
                    <form class="form-horizontal" role="form" action="{{asset('question/'.$items->id)}}" method="post">
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label">Question Title<span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="question_title" value="{{old('question_title',$items->title)}}" class="form-control" placeholder="Question Title for Reference">
                                            @if($errors->has('question_title'))
                                                <div class="text-red">{{$errors->first('question_title')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <h5><strong>Answers list</strong></h5>
                                    <form action="{{asset('question/create')}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="qid" value="{{ $items->id }}">
                                        <a class="btn btn-success btn-xs pull-right" href="{{asset('/answer/create?qid='.$items->id)}}"><i class="fa fa-plus-circle"></i> New Answer</a>
                                    </form>
                                    <hr>
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
                                                    <option value="{{$type->name}}" {{old('test',$items->test_id) == $type->name ? 'selected' : ''}}>{{$type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="table-responsive">
                                        <table id="datatables-1" data-sortable class="table table-hover table-striped">
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
                                                    <td>{{ $ans->status }}</td>
                                                    <td style="text-align: center !important;">
                                                        <div class="btn-group btn-group-xs">
                                                            <form method="post" action="">
                                                                {{csrf_field()}}
                                                                <a data-toggle="tooltip" href="" title="Edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                                                                {{method_field('DELETE')}}
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

                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label">Difficulty Level <span class="text-red"> * </span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="difficulty_level" value="{{old('difficulty_level',$items->difficulty)}}" class="form-control" placeholder="Enter Difficulty Level">
                                            @if($errors->has('difficulty_level'))
                                                <div class="text-red">{{$errors->first('difficulty_level')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label" style="margin-bottom: 10px !important;">Create Question ?<span class="text-red"> * </span></label>
                                        <br>
                                        <div class="col-sm-12">
                                            <textarea name="editor1">{{ $items->question }}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'editor1' );
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="course" class="col-sm-4 control-label" style="margin-bottom: 10px !important;">Enter Explanation <span class="text-red"> * </span></label>
                                        <br>
                                        <div class="col-sm-12">
                                            <textarea name="editor2">{{ $items->explanation }}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'editor2' );
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-12 text-center center-block">
                                <a href="{{asset('question')}}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of your awesome content -->

            <!-- Footer Start -->
@endsection



