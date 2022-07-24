<html>
<head>
   @include('admin.header')
   @yield('custom-head')   
</head>
<body>
    @include('admin.topnav')
    @include('admin.sidebar')
    <div id="content">
        @yield('content')
    </div>
    @include('admin.footer')
    @yield('custom-footer')
</body>
</html>