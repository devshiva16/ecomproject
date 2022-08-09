<div class="left side-menu hiddenprint">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
         <ul>
            <li><a href="{{ asset('/category') }}"><i class='icon-home-3'></i><span>Categories</span></a></li>
            <li><a href="{{ asset('/product') }}"><i class='icon-home-3'></i><span>Products</span></a></li>
             {{-- <li><a href="{{ asset('/home') }}"><i class='icon-home-3'></i><span>Dashboard</span></a></li>
             <!-- Admin Menu -->
             @if(Auth::user()->role_id==1 || Auth::user()->role_id==2)
             <li><a class="" href="{{ asset('/student') }}"><i class='fa icon-graduation-cap'></i><span>Student</span></a></li>
             <li><a class="" href="{{ asset('/category') }}"><i class='fa fa-list-alt'></i><span>Category</span></a></li>
             <li><a class="" href="{{ asset('/course') }}"><i class='fa fa-bookmark'></i><span>Course</span></a></li>
             <li><a class="" href="{{ asset('/module') }}"><i class='glyphicon glyphicon-list-alt'></i><span>Module</span></a></li>
             <li><a class="" href="{{ asset('/subject') }}"><i class='fa fa-book'></i><span>Subject</span></a></li>
             <li><a class="" href="{{ asset('/topic') }}"><i class='fa fa-book'></i><span>Topics</span></a></li>
             <li><a class="" href="{{ asset('/test') }}"><i class='glyphicon glyphicon-barcode'></i><span>Test</span></a></li>
             <li><a class="" href="{{ asset('/question') }}"><i class='glyphicon glyphicon-list-alt'></i><span>Question</span></a></li>
             <li><a class="" href="{{ asset('/answer') }}"><i class='glyphicon glyphicon-list-alt'></i><span>Answer</span></a></li>
             @endif
             <!-- End Admin Menu -->
             @if(Auth::user()->role_id==1)
             <li><a class="" href="{{ asset('/users') }}"><i class='fa fa-users'></i><span>Users</span></a></li>
             @endif
             <!-- Student Menus --->
             @if(Auth::user()->role_id==3)
             <li><a class="" href="{{ asset('/profile') }}"><i class='fa icon-graduation-cap'></i><span>Profile</span></a></li>
             <li><a class="" href="{{ asset('/myCourse') }}"><i class='fa fa-book'></i><span>My Course</span></a></li>
             <li><a class="" href="{{ asset('/myTest') }}"><i class='glyphicon glyphicon-barcode'></i><span>My Tests</span></a></li>
             <!--<li><a class="" href="{{ asset('/myScore') }}"><i class='glyphicon glyphicon-envelope'></i><span>My Score</span></a></li>-->
             @endif
             <!-- End Student Menu -->
             <li>
                 <a class="" href="{{ asset('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                     <i class='glyphicon glyphicon-log-out '></i><span>Logout</span>
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                 </form>
             </li> --}}
         </ul>
         <div class="clearfix"></div>
        </div>
    </div>
</div>