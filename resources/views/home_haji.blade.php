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
                <div class="icon icon-rose">
                    <i class="material-icons">group_work</i>
                </div>
                <section id="haji" class="haji">
                    <div class="description">
                        <h4 class="info-title ps-3">Haji Reguler</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="card mx-1" style="width: 18rem;">
                                <img src="https://img.inews.co.id/media/822/files/inews_new/2021/07/14/haji1.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Haji Reguler</h5>
                                </div>
                            </div>
                            <div>
                                <div class="bg-light p-4 rounded row">
                                    <h3 class="card-text text-center">Harga Paket</h3>
                                    <h1 class="card-text text-center">IDR. 65.000.000</h1>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <a href="{{route('login')}}" class="btn btn-primary">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 border bg-light mt-3 rounded">
                            <p class="fw-bold">Informasi Umum</p>
                            <p style="text-align: justify; text-justify: inter-word;">Paket Umrah Reguler selama 9 Hari. Jamaah akan menginap selama 3 malam di Madinah Al
                            Munawarah dan 4 malam di Makkah Al Mukarramah. Selama di Madinah Al Munawarah, jamaah akan
                            diagendakan ziarah ke beberapa tempat yang memiliki nilai Syiar Islam seperti Masjid Quba,
                            Jabal Uhud, Masjid Qiblatain, Khandaq, Percetakan Al Qur’an & Kebun Kurma. Adapun di Makkah
                            Al Mukarramah, jamaah akan berziarah ke Gua Hira/ Jabal Nur, Jabal Tsur, Masjid Namirah,
                            Arafah, Jabal Rahmah, Muzdalifah, Mina, dan Museum Makkah. Di hari terakhir, jamaah akan
                            diajak City Tour Jeddah ke Corniche, Balad, Pantai Laut Merah & Masjid Rahmah Masjid
                            Terapung.</p>
                        </div>
                        {{-- <a href="#pablo">Find more...</a> --}}
                    </div>
                </section>
            </div>

            <div class="">
                <p>.</p>
            </div>

            <div class="info info-horizontal">
                <div class="icon icon-rose">
                    <i class="material-icons">group_work</i>
                </div>
                <section id="haji" class="haji">
                    <div class="description">
                        <h4 class="info-title ps-3">Haji Plus</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="card mx-1" style="width: 18rem;">
                                <img src="https://img.inews.co.id/media/822/files/inews_new/2021/07/14/haji1.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Haji Plus</h5>
                                </div>
                            </div>
                            <div>
                                <div class="bg-light p-4 rounded row">
                                    <h3 class="card-text text-center">Harga Paket</h3>
                                    <h1 class="card-text text-center">IDR. 88.000.000</h1>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <a href="{{route('login')}}" class="btn btn-primary">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="shadow p-3 border bg-light mt-3 rounded">
                            <p class="fw-bold">Informasi Umum</p>
                            <p style="text-align: justify; text-justify: inter-word;">Paket Umrah Reguler selama 9 Hari. Jamaah akan menginap selama 3 malam di Madinah Al
                            Munawarah dan 4 malam di Makkah Al Mukarramah. Selama di Madinah Al Munawarah, jamaah akan
                            diagendakan ziarah ke beberapa tempat yang memiliki nilai Syiar Islam seperti Masjid Quba,
                            Jabal Uhud, Masjid Qiblatain, Khandaq, Percetakan Al Qur’an & Kebun Kurma. Adapun di Makkah
                            Al Mukarramah, jamaah akan berziarah ke Gua Hira/ Jabal Nur, Jabal Tsur, Masjid Namirah,
                            Arafah, Jabal Rahmah, Muzdalifah, Mina, dan Museum Makkah. Di hari terakhir, jamaah akan
                            diajak City Tour Jeddah ke Corniche, Balad, Pantai Laut Merah & Masjid Rahmah Masjid
                            Terapung.</p>
                        </div>
                        {{-- <a href="#pablo">Find more...</a> --}}
                    </div>
                </section>
            </div>

            <div class="">
                <p>.</p>
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
