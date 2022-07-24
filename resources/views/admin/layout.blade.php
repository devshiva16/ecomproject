<html>
    <head>
    @include('admin.header')
    @yield('custom-head')   
    </head>
    <body class="nk-body bg-lighter npc-general has-sidebar ">
        <div class="nk-app-root">
            <div class="nk-main ">
                @include('admin.sidebar')
                <div class="nk-wrap ">
                    @include('admin.topnav')
                    <div class="nk-content ">
                        <div class="container-fluid">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('admin.footer')
                    @yield('custom-footer')
                </div>
            </div>
        </div>
    </body>
</html>