
@extends('MyLayouts.master')
<style>
    /* card details start  */
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');
    section{
        padding: 100px 0;
    }
    .details-card {
        background: #ecf0f1;
    }

    .card-content {
        background: #ffffff;
        border: 4px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    }

    .card-img {
        position: relative;
        overflow: hidden;
        border-radius: 0;
        z-index: 1;
    }

    .card-img img {
        width: 100%;
        height: auto;
        display: block;
    }

    .card-img div {
        position: absolute;
        top: 15%;
        left: 12%;
        background: #1ABC9C;
        padding: 6px;
        color: #fff;
        font-size: 12px;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -ms-border-radius: 4px;
        -o-border-radius: 4px;
        transform: translate(-50%,-50%);
        text-align: right;
        position: absolute;
    }
    .card-img span h4{
        font-size: 12px;
        margin:0;
        padding:10px 5px;
        line-height: 0;
    }
    .card-desc {
        padding: 1.25rem;
    }

    .card-desc h3 {
        color: #000000;
        font-weight: 600;
        font-size: 1.5em;
        line-height: 1.3em;
        margin-top: 0;
        margin-bottom: 5px;
        padding: 0;
    }

    .card-desc p {
        color: #747373;
        font-size: 14px;
        font-weight: 400;
        font-size: 1em;
        line-height: 1.5;
        margin: 0px;
        margin-bottom: 20px;
        padding: 0;
        font-family: 'Raleway', sans-serif;
    }
    .btn-card{
        background-color: #1ABC9C;
        color: #fff;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
        padding: .84rem 2.14rem;
        font-size: 1.2rem;
        -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        margin: 0;
        border: 0;
        -webkit-border-radius: .125rem;
        border-radius: .125rem;
        cursor: pointer;
        text-transform: uppercase;
        white-space: normal;
        word-wrap: break-word;
    }
    .btn-card:hover {
        background: orange;
    }
    a.btn-card {
        text-decoration: none;
        color: #fff;
    }
    .duration{
        font-size: 1.2rem !important;
        color: #1B1E24 !important;
    }
    .pagination{
        text-align: center !important;
    }
    /* End card section */
    th,td{
        font-size: 12px !important;
        text-align: center !important;
    }
</style>
@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li class="active">My Score</li></ol>
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="widget">
                <div class="row">
                    <div class="col-md-12">
                        @include('MyLayouts.message')
                    </div>
                </div>
                <div class="widget-header transparent">
                    <h2><strong>My</strong> Score</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><strong>Test Name : </strong> &nbsp;&nbsp;{{ $test->name }} <span class="duration pull-right"><strong>Test Date :</strong> {{ date('d-m-Y') }}</span></h4>
                        </div>
                        @php
                        {{
                            $attempted = count($answers);
                            $not_attempted = $test->no_of_questions - $attempted;
                            $correct = 0;
                            $wrong = 0 ;
                            foreach($answers as $ans){
                                if($ans['answer_status']!='Wrong'){
                                    $correct++;
                                }else{
                                    $wrong++;
                                }
                            }
                            $total_marks = $test->no_of_questions * $test->correct_ans_marks;
                            $penalty = $wrong * $test->wrong_ans_marks;
                            $marks_obtained = $correct * $test->correct_ans_marks;
                            $score = $correct - $penalty;
                        }}
                        @endphp
                        <div class="col-md-12" style="margin-top: 25px;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Total Questions</th>
                                            <th>Questions Attempted</th>
                                            <th>Questions Not Attempted</th>
                                            <th>Correct Answers</th>
                                            <th>Wrong Answers</th>
                                            <th>Total Marks</th>
                                            <th>Marks Obtained</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $test->no_of_questions }}</td>
                                            <td>{{ $attempted }}</td>
                                            <td>{{ $not_attempted }}</td>
                                            <td>{{ $correct }}</td>
                                            <td>{{ $wrong }}</td>
                                            <td>{{ $total_marks }}</td>
                                            <td>{{ $score }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 20px;padding: 25px !important;">
                            <hr>
                            <h4 class="text-center" style="font-weight: bold;">Question Answers with Explanations</h4>
                            <hr>
                            @foreach( $questions as $ques )
                                <div class="col-md-12">
                                    <h5><strong><span style="color: red;">Qno.{{$loop->index + 1}}</span> {{ $ques->title }}</strong></h5>
                                    <br>
                                    {!! $ques->question !!}
                                </div>
                                <div class="col-md-12"></div>
                                <div class="col-md-12">
                                    <h5 style="color: green;"><u><strong>Answers Explanation :-</strong></u></h5>
                                    {!!  $ques->explanation !!}
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of your awesome content -->

        <!-- Footer Start -->
@endsection
