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
</style>
@section('BodyContent')
    <div class="content-page">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li><li class="active">Choose Course</li></ol>
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
                    <h2><strong>Choose</strong> Course</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <div class="row">

                    <!-- details card section starts from here -->
                    <!--<section class="details-card">
                        <div class="container">-->
                            @foreach($courses as $course)
                                <div class="col-md-4" style="margin-bottom: 25px !important;">
                                    <div class="card-content">
                                        <div class="card-img">
                                            <a href="#" class="btn-card text-center" style="color: ghostwhite !important;font-weight: bold;font-size: 1.2rem; text-align: right; float: right !important; border-radius: 4px;"><i class="fa fa-inr" aria-hidden="true"></i> {{ $course->fee }}</a>
                                            <!--<img src="/storage/course_images/{{$course->course_image}}" alt="{{ $course->course_image }}" style="width: 326px !important;height: 183px !important;">-->
                                            <img src="{{ asset("storage/course_images/$course->course_image") }}" alt="{{ $course->course_image }}" style="width: 326px !important;height: 183px !important;">
                                        </div>
                                        <div class="card-desc">
                                            <h3>{{ $course->name }} <a href="#" class="duration pull-right"> {{ $course->duration }} </a></h3>
                                            <br>
                                            <div class="text-justify"> {{ $course->description }} </div>
                                            <br>
                                            <a href="{{ asset('/SelectCourse/'.$course->id) }}" class="btn-card btn-block text-center">Buy Now</a>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        <!--</div>
                    </section>-->
                    <!-- details card section starts from here -->

                    </div>
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
            <!-- End of your awesome content -->

            <!-- Footer Start -->
@endsection
