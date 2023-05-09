
<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">CodingLab</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
                <i class='bx bx-grid-alt' ></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Category</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-clipboard'></i>
                <span class="link_name">Programs</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Programs</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                <i class='bx bxs-user-detail'></i>
                <span class="link_name">Applicants</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Applicants</a></li>
                <li><a href="#">Learners</a></li>
                <li><a href="#">Programs</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-file-blank'></i>
                <span class="link_name">Enrollment</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Enrollment</a></li>
            </ul>
        </li>

        {{-- [Start] - Other Resources --}}
        {{-- <li>
            <a href="#">
                <i class='bx bx-line-chart' ></i>
                <span class="link_name">Chart</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Chart</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                <i class='bx bx-plug' ></i>
                <span class="link_name">Plugins</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Plugins</a></li>
                <li><a href="#">UI Face</a></li>
                <li><a href="#">Pigments</a></li>
                <li><a href="#">Box Icons</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-compass' ></i>
                <span class="link_name">Explore</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Explore</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-history'></i>
                <span class="link_name">History</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">History</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog' ></i>
                <span class="link_name">Setting</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Setting</a></li>
            </ul>
        </li> --}}
        {{-- [End] - Other Resources --}}
      
        <li>
            <form method="POST" action="{{route('logout')}}" class="fixed-bottom mb-2">
            @csrf
            <i class='bx bx-log-out'></i>
                <button class="btn text-light link_name">
                    Logout
                </button>
            </form>
        </li>

    </ul>
</div>
<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">Hello, {{auth()->user()->name}}</span>
       
    </div>
    <div class="page-content">
        {{$slot}}
    </div>
</section>

   


