<!-- Navbar Transparent -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
        <div class="container">
            <a class="navbar-brand  text-white " href="https://demos.creative-tim.com/material-kit/presentation" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                AN-NAHDIYAH
            </a>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                    <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
                        <a href="{{url('/home')}}" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                            <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons opacity-6 me-2 text-md">person</i>
                            {{ Auth::user()->name }}
                            <img src="{{asset('material-kit-2-3.0.0/assets/')}}/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                            <div class="d-none d-lg-block">
                                <ul class="list-group">
                                    <li class="nav-item list-group-item border-0 p-0">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Menu</h6>
                                            <span class="text-sm">Logout User</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
