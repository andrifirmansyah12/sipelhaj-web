<!doctype html>
<html lang="en">

<head>
    <title>Sistem Informasi Pelayanan Haji dan Umroh</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- Material Kit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('material-kit-2-3.0.0/assets/')}}/css/material-kit.css?v=3.0.0" rel="stylesheet" />
</head>

<body>
    <!-- Navbar Transparent -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
        <div class="container">
            <a class="navbar-brand  text-white " href="#" rel="tooltip" title="Designed and Coded by Creative Tim"
                data-placement="bottom" target="_blank">
                AN-NAHDIYAH
            </a>
            <a class="navbar-brand  text-white " href="{{url('/home-haji')}}">
                Informasi Haji
            </a>
            <a class="navbar-brand  text-white " href="{{url('/home-umroh')}}" rel="tooltip"
                title="Designed and Coded by Creative Tim" data-placement="bottom">
                Informasi Umroh
            </a>
            <a class="navbar-brand  text-white " href="{{url('/home-jadwal')}}" rel="tooltip"
                title="Designed and Coded by Creative Tim" data-placement="bottom">
                Jadwal
            </a>
            <a class="navbar-brand  text-white " href="{{url('/home-kontak')}}" rel="tooltip"
                title="Designed and Coded by Creative Tim" data-placement="bottom">
                Kontak
            </a>
            <a class="navbar-brand  text-white " href="{{url('/home-galeri')}}" rel="tooltip"
                title="Designed and Coded by Creative Tim" data-placement="bottom">
                Galeri
            </a>
            <a class="navbar-brand  text-white " href="{{url('/home-profil')}}" rel="tooltip"
                title="Designed and Coded by Creative Tim" data-placement="bottom">
                Profil
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1">Haji</span>
                    <span class="navbar-toggler-bar bar2">Umroh</span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            @if (Route::has('login'))
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                    <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
                        @auth
                        <a href="{{url('/home')}}" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                            <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        @else
                        <a href="{{route('login')}}" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
                            <i class="material-icons opacity-6 me-2 text-md">login</i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0">
                        @if (Route::has('register'))
                        <a href="{{route('register')}}"
                            class="btn btn-sm  bg-gradient-primary mb-0 me-1 mt-2 mt-md-0">Register</a>
                        @endif
                        @endauth
                    </li>
                </ul>
            </div>
            @endif
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="page-header min-vh-80" style="background-image: url('http://localhost:8000/haji.jpg')">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="text-center">
                        <h1 class="text-white">Welcome to Website</h1>
                        <h3 class="text-white">Informasi Layanan Haji dan Umroh</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <div class="container">
            <div class="info info-horizontal">
                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container my-5" data-aos="fade-up">
                        <div class="section-header">
                            <div class="text-center">
                                <h2>ADA PERTANYAAN ?</h2>
                                <p class="py-3">Anda ingin mendaftar, konsultasi, atau ada pertanyaan seputar layanan kami? Silahkan
                                    hubungi kami</p>
                            </div>
                            <div class="row gx-lg-0 gy-4">
                                <div class="text-center">
                                    <h6 class="fw-normal">Melalui Telepon</h6>
                                    <a type="button" class="d-inline-flex align-items-center btn btn-primary btn-lg"
                                        href="https://wa.me/6281289912191"> +6281289912191
                                        <i class="fa-brands fa-whatsapp ps-2 text-white"></i>
                                    </a>
                                </div>
                            </div><!-- End Contact Form -->
                            <div class="row gx-lg-0 gy-4 mt-2">
                                <div class="text-center">
                                    <h6 class="fw-normal">Melalui Email</h6>
                                    <div class="my-3">
                                        <input placeholder="Nama Lengkap"
                                            class="col-5 px-2 py-1 rounded border border-light" type="text" name=""
                                            id="">
                                    </div>
                                    <div class="my-3">
                                        <input placeholder="Email" class="col-5 px-2 py-1 rounded border border-light"
                                            type="text" name="" id="">
                                    </div>
                                    <div class="my-3">
                                        <textarea placeholder="Pertanyaan" class="px-2 py-1 rounded border border-light"
                                            name="" id="" cols="50" rows="2"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="d-inline-flex align-items-center btn btn-light btn-lg">
                                            Kirim
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End Contact Section -->
            </div>
        </div>
    </div>

    <footer class="footer pt-5 mt-5">
        <div class="col-12">
            <div class="text-center">
                <p class="text-dark my-4 text-sm font-weight-normal">
                    All rights reserved. Copyright © <script>
                        document.write(new Date().getFullYear())
                    </script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </p>
            </div>
        </div>
        </div>
        </div>
    </footer>
</body>

</html>
