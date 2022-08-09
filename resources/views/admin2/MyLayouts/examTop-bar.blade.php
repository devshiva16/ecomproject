<div class="topbar hiddenprint" style="border-bottom: 1px solid lightcoral;">
    <!--<div class="topbar-left">
        <div class="logo">
            <h5 style="color: ghostwhite; font-size: 22px; font-weight: 300; margin-left: 8px; margin-top: 12px;">
                Online Test System
            </h5>
        </div>
        <button class="button-menu-mobile open-left">
            <i class="fa fa-bars"></i>
        </button>
    </div>-->
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                        <div class="dropdown-menu grid-dropdown">
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <!--<a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>-->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li class="language_bar dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">English (US) <!-- <i class="fa fa-caret-down"></i> --></a>
                        <!-- <ul class="dropdown-menu pull-right">
                            <li><a href="#">German</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul> -->
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right top-navbar">

                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!--<span class="rounded-image topbar-profile-image"><img src="{{asset('images/users/user-35.jpg')}}"></span>-->
                            Hello <strong>{{ Auth::user()->name }}</strong> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            @if(Auth::id() !== 1)
                                <li><a href="{{asset('user/profile')}}">My Profile</a></li>
                        @endif

                        <!--<li><a href="{{asset('user/password')}}">Change Password</a></li>-->
                            <li class="divider"></li>
                            <!-- <li><a href="#"><i class="icon-help-2"></i> Help</a></li> -->
                            <!-- <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li> -->
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-logout-1"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify">

                        <!--<form method="post" name="quiz" id="quiz_form" action="#" >
                        </form>-->
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
