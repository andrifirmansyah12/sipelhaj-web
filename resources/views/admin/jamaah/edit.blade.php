<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')

<body class="g-sidenav-show  bg-gray-200">
    @include('admin.layout.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('admin.layout.navbar')
        <div class="container-fluid py-4">
            <div class="row min-vh-80 h-100">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Edit Data Jemaah</h3>
                            <hr>

                            <form action="{{route('jamaah.update',$jamaah)}}" method="POST">
                            @method('PUT')
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="date" class="form-control" id="" placeholder="" name="tgl_daftar" value="{{$jamaah->tgl_daftar ?? old('tgl_daftar')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="" name="nama_lengkap" value="{{$jamaah->nama_lengkap ?? old('nama_lengkap')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="" name="tgl_lahir" value="{{$jamaah->tgl_lahir ?? old('tgl_lahir')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="" name="alamat" value="{{$jamaah->alamat ?? old('alamat')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="" name="no_telp" value="{{$jamaah->no_telp ?? old('no_telp')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="" name="keterangan" value="{{$jamaah->keterangan ?? old('keterangan')}}">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{route('jamaah.index')}}" class="btn btn-default">
                                        Batal
                                    </a>
                                </div>
                            </form>

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
