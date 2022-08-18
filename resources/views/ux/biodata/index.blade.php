<!doctype html>
<html lang="en">
@include('ux.layout.head')
<body>
@include('ux.layout.navbar')
    <div class="page-header min-vh-80" style="background-image: url('http://localhost:8000/haji.jpg')">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="text-center">
                        <h1 class="text-white">Welcome {{ Auth::user()->name }}</h1>
                        <h6 class="text-white">Isi Biodata Anda Dibawah !!!</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Data Diri</h2>
            </div>
            <form action="{{route('biodata.store')}}" method="POST">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="date" class="form-control" id="" placeholder="" name="tgl_daftar" value="{{old('tgl_daftar')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="Nama Lengkap" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">r</label>
                                    <input type="text" class="form-control" id="" placeholder="Tanggal Lahir" name="tgl_lahir" value="{{old('tgl_lahir')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="Alamat" name="alamat" value="{{old('alamat')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="No Telp" name="no_telp" value="{{old('no_telp')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="Keterangan" name="keterangan" value="{{old('keterangan')}}">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{route('home')}}" class="btn btn-default">
                                        Batal
                                    </a>
                                </div>
                            </form>
        </div>
    </div>
@include('ux.layout.footer')
@include('ux.layout.script')
</body>
</html>
