@extends('MyLayouts.master')



@section('BodyContent')

    <div class="content-page">

        <ol class="breadcrumb">

            <li><a href="#">Home</a></li><li class="active">Dashboard</li>

        </ol>           <!-- ============================================================== -->

        <!-- Start Content here -->

        <!-- ============================================================== -->

        <div class="content">

            <!-- Start info box -->

            <div class="row top-summary">

                <div class="col-lg-3 col-md-6">

                    <div class="widget lightblue-1">

                        <div class="widget-content padding">

                            <div class="widget-icon">


                                <i class="fa icon-users"></i>

                            </div>

                            <div class="text-box">

                                <p class="maindata">TOTAL <b>STUDENT</b></p>

                                <h2></h2>

                                <div class="clearfix"></div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6">

                    <div class="widget green-1">

                        <div class="widget-content padding">

                            <div class="widget-icon">

                                <i class="fa icon-graduation-cap"></i>

                            </div>

                            <div class="text-box">

                                <p class="maindata">TOTAL <b>Course</b></p>

                                <h2></h2>

                                <div class="clearfix"></div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6">

                    <div class="widget orange-2">

                        <div class="widget-content padding">

                            <div class="widget-icon">

                                <i class="fa fa-book"></i>

                            </div>

                            <div class="text-box">

                                <p class="maindata">Total <b>Subject</b></p>

                                <h2></h2>

                                <div class="clearfix"></div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6">

                    <div class="widget darkblue-2">

                        <div class="widget-content padding">

                            <div class="widget-icon">


                                <i class="glyphicon glyphicon-list-alt"></i>

                            </div>

                            <div class="text-box">

                                <p class="maindata">TOTAL <b>Test</b></p>

                                <h2></h2>

                                <div class="clearfix"></div>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

            <!-- End of info box -->



            <div class="row">

                <div class="col-lg-12 portlets">

                    <div id="website-statistics1" class="widget">

                        <div class="widget-header transparent">



                            <!--<h2><i class="icon-chart-line"></i> <strong>Student's </strong> Attendence</h2>-->


                        </div>

                        <div class="widget-content">

                            <div id="website-statistic" class="statistic-chart">

                                <div class="row stacked">

                                    <div class="col-sm-12">

                                        <div class="clearfix"></div>

                                        <div id="chartContainer" class="morris-chart" style="height: 370px;"></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


            </div>



            @endsection



            @push('ExtraCss')

                <link href="{{asset('assets/libs/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />

                <link href="{{asset('assets/libs/morrischart/morris.css')}}" rel="stylesheet" type="text/css" />

                <link href="{{asset('assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

                <link href="{{asset('assets/libs/jquery-clock/clock.css')}}" rel="stylesheet" type="text/css" />

                <link href="{{asset('assets/libs/bootstrap-calendar/css/bic_calendar.css')}}" rel="stylesheet" type="text/css" />



                <link href="{{asset('assets/libs/jquery-weather/simpleweather.css')}}" rel="stylesheet" type="text/css" />

                <link href="{{asset('assets/libs/bootstrap-xeditable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css" />

            @endpush



            @push('ExtraJs')

                <script src="{{asset('assets/libs/d3/d3.v3.js')}}"></script>

                <script src="{{asset('assets/libs/rickshaw/rickshaw.min.js')}}"></script>

                <script src="{{asset('assets/libs/raphael/raphael-min.js')}}"></script>

                <script src="{{asset('assets/libs/morrischart/morris.min.js')}}"></script>

                <script src="{{asset('assets/libs/jquery-knob/jquery.knob.js')}}"></script>

                <script src="{{asset('assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>

                <script src="{{asset('assets/libs/jquery-jvectormap/js/jquery-jvectormap-world-mill-en.js')}}"></script>

                <script src="{{asset('assets/libs/jquery-clock/clock.js')}}"></script>

                <script src="{{asset('assets/libs/jquery-easypiechart/jquery.easypiechart.min.js')}}"></script>

                <script src="{{asset('assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js')}}"></script>

                <script src="{{asset('assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js')}}"></script>

                <script src="{{asset('assets/libs/bootstrap-calendar/js/bic_calendar.min.js')}}"></script>

                <script src="{{asset('assets/js/apps/calculator.js')}}"></script>

                <script src="{{asset('assets/js/apps/todo.js')}}"></script>

                <script src="{{asset('assets/js/apps/notes.js')}}"></script>

                <script src="{{asset('assets/js/pages/index2.js')}}"></script>

                <script src="{{asset('assets/js/pages/canvas.js')}}"></script>





    @endpush
