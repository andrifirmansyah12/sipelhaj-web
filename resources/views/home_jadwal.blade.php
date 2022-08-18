<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')

<body class="g-sidenav-show  bg-gray-200">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}">AN-NAHDIYAH</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li> --}}
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
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1542521148-51306e7ffc1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" class="img img-fluid rounded" alt="" style="width: 100%; height: 15rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                            <h3 class="my-5 text-center">Jadwal Kegiatan Jemaah KBIH An nahdiyah</h3>
                            <table class="table table-hover table-stripped" id="table_id">
                                <thead >
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Miladiyah</th>
                                        <th>Tanggal Huriyah</th>
                                        <th>Kegiatan</th>
                                        <th>Waktu</th>
                                        <th>Tempat</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jadwal as $key => $jadwal)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{\Carbon\Carbon::parse($jadwal->tgl_miladiyah)->isoFormat('D MMMM Y')}}</td>
                                        <td>{{$jadwal->tgl_huriyah}}</td>
                                        <td>{{$jadwal->kegiatan}}</td>
                                        <td>{{\Carbon\Carbon::parse($jadwal->waktu)->isoFormat('H:ss')}}</td>
                                        <td>{{$jadwal->tempat}}</td>
                                        <td>{{$jadwal->keterangan}}</td>
                                    </tr>
                                    @endforeach
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
    @include('admin.layout.script')

</body>

</html>
