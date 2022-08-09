<head>
        <meta charset="UTF-8">
        <title>Admin | Online Test System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- Base Css Files -->
        <link href="{{asset('admin2/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet" />
        <link href="{{asset('admin2/assets/libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('admin2/assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('admin2/assets/libs/fontello/css/fontello.css')}}" rel="stylesheet" />
        <link href="{{asset('admin2/assets/libs/animate-css/animate.min.css')}}" rel="stylesheet" />
        <link href="{{asset('admin2/assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet" />
        <link href="{{asset('admin2/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" /> 
        <link href="{{asset('admin2/assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet" /> 
        <link href="{{asset('admin2/assets/libs/pace/pace.css')}}" rel="stylesheet" />
        <link href="{{asset('admin2/assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('admin2/assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
        <link href="{{asset('admin2/assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet" />
        <link href="{{asset('admin2/assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet" />
     
        <!-- Code Highlighter for Demo -->
        <link href="{{asset('admin2/assets/libs/prettify/github.css')}}" rel="stylesheet" />
        <!-- Extra CSS Libraries Start -->
        <link href="{{asset('admin2/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        <!-- Extra CSS Libraries End -->
        <link href="{{asset('admin2/assets/css/style-responsive.css')}}" rel="stylesheet" />
        @stack('ExtraCss')
        <link rel="shortcut icon" href="{{asset('admin2/assets/img/favicon.ico')}}">
        <link rel="apple-touch-icon" href="{{asset('admin2/assets/img/apple-touch-icon.png')}}" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('admin2/assets/img/apple-touch-icon-57x57.png')}}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('admin2/assets/img/apple-touch-icon-72x72.png')}}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin2/assets/img/apple-touch-icon-76x76.png')}}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('admin2/assets/img/apple-touch-icon-114x114.png')}}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('admin2/assets/img/apple-touch-icon-120x120.png')}}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('admin2/assets/img/apple-touch-icon-144x144.png')}}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('admin2/assets/img/apple-touch-icon-152x152.png')}}" />
        <script src="{{asset('admin2/assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
        <!--<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>-->
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        @stack('calenderJs')
        <style>
            th,td{
                text-align: center !important;
                font-size: 12px !important;
            }
        </style>
    </head>