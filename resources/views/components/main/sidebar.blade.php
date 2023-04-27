<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="p-3 pb-5 navbar nav_title" style="border: 0;">
                    <p class="text-start text-light">
                        {{-- <img src="{{asset('images/logo.png')}}" alt="" class="w-100"> --}}
                        <b>INTERNATIONALIZATION</b>
                        <br>
                        <b>OFFICE</b>
                    </p>
                </div>

                <div class="clearfix"></div>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                        
                            <!-- Dashboard -->
                            <li>
                                <a>
                                    <i class="fa-solid fa-house mr-3"></i>
                                    Dashboard
                                </a>
                            </li>
                            
                            <!-- File Maintenance -->
                            <li>
                                <a>
                                    <i class="fa-solid fa-folder-open mr-3"></i>
                                    File Maintenance 
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu">
                                    <li>
                                        <a href="form.html">Programs</a>
                                    </li>
                                    <li>
                                        <a href="form_advanced.html">Subjects</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Applicants -->
                            <li>
                                <a>
                                    <i class="fa-solid fa-users mr-3"></i>
                                    Applicants 
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu">
                                <li>
                                    <a>Learners<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu">
                                            <a href="level2.html">View Applicants by Name</a>
                                        </li>
                                        <li>
                                            <a href="#level2_1">View Applied Programs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>Programs<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu">
                                            <a href="level2.html">View List of Programs with List of Applicants</a>
                                        </li>
                                    </ul>
                                </li>
                                </ul>
                            </li> 

                            <!-- Enrollment -->
                            <li>
                                <a>
                                    <i class="fa-solid fa-file-import mr-3"></i>
                                    Enrollment
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu">
                                    <li>
                                        <a href="tables.html">Programs</a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <nav class="p-1 nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open">
                            
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user mr-2"></i>John Doe
                            </a>

                            <div class="m-2 dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <form method="POST" action="/logout">
                                @csrf
                                    <button class="dropdown-item" ><i class="fa fa-sign-out pull-right mr-2"></i>Log Out</button>
                                </form>
                            </div>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        {{-- Main content of the dashboard --}}
        @yield('content.sidebar')
      
    </div>
</div>
