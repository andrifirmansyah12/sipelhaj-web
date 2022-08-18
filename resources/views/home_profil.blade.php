<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')

<body class="g-sidenav-show  bg-gray-200">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">Sipelhaj</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{-- <a class="nav-link active" aria-current="page" href="#">Home</a> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home-haji')}}">Informasi Haji</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home-umroh')}}">Informasi Umroh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home-jadwal')}}">Informasi Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home-kontak')}}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home-galeri')}}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home-profil')}}">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <div class="container-fluid py-4">

            <div class="row min-vh-80 h-100">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body mx-md-5">
                            <img src="https://images.unsplash.com/photo-1568009167523-043c39300e67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1407&q=80" class="img img-fluid my-5 rounded" alt="" style="width: 100%; height: 15rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                        <p class="pb-3" style="text-align: justify; text-justify: inter-word;">KBIH An-Nahdiyah merupakan perusahaan swasta nasional yang bergerak di bidang Tour dan
                            Travel. Perusahaan ini didirikan pada tahun 1998 dengan nama PT. Muna Bina Insani. Produk
                            jasa Munatour meliputi program Umrah plus dan reguler, Haji khusus VVIP, Visa Umrah, Tour
                            Domestik dan Internasional, Tiket Domestik dan Internasional, Reservasi Hotel dan Pengurusan
                            Dokumen perjalanan.

                            KBIH An-Nahdiyah memiliki 3 (tiga) poin yang menjadi kelebihan utama kami yaitu Pertama:
                            Berhaji dan Berumrah sesuai sunnah Rasulullah Saw. Dengan komitmen ini, setiap keberangkatan
                            jamaah umrah dan haji Munatour akan selalu didampingi oleh ustadz pembimbing ibadah yang
                            berpengalaman. Kedua: Pengalaman lebih dari 15 tahun. ini menjadi modal kuat untuk selalu
                            melayani dan membimbing jamaah dalam beribadah umrah dan haji. Ketiga: Menyediakan layanan
                            fasilitas yang berkualitas. Munatour selalu memberikan fasilitas Maskapai yang berlisensi
                            IATA seperti Saudia Airlines, Garuda Indonesia, Emirates Airlines dll. Hotel berbintang yang
                            relatif dekat dengan Masjidil Haram dan Masjid Nabawi. Telah dipercaya menjadi partner
                            terbaik dengan Hotel Movenpick dan Muassasah Shaayer For Hajj & Umrah Services.

                            Sebagai komitmen legalitas perusahaan dalam melayani pelanggan dan jamaah secara aman dan
                            profesional, saat ini Munatour telah mengantongi izin resmi dari pemerintah melalui
                            Kementrian Pariwisata, izin Haji Khusus dan Umrah dari Kementrian Agama. Selain itu
                            perusahaan juga tergabung dalam komunitas organisasi Internasional yaitu IATA, organisasi
                            travel nasional yaitu Asita dan komunitas penyelenggara umrah dan haji khusus yaitu
                            ASPHURINDO.</p>
                            <div class="mb-5">
                                <h3 class="text-center">DATA UMUM PERUSAHAAN</h3>
                            </div>
                            <table class="table table-hover  table-stripped" id="table_id">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td> test </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Miladiyah</td>
                                        <td> test </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Huriyah</td>
                                        <td> test </td>
                                    </tr>
                                    <tr>
                                        <td>Kegiatan</td>
                                        <td> test </td>
                                    </tr>
                                    <tr>
                                        <td>Waktu</td>
                                        <td> test </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat</td>
                                        <td> test </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td> test </td>
                                    </tr>
                                    <tr>
                                        <td>Opsi</td>
                                        <td> test </td>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.layout.footer')
        </div>
    </main>

    @include('admin.layout.setting')



</body>

</html>
