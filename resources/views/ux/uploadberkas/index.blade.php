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
                        <h6 class="text-white">Pilih file untuk kelengkapan berkas anda ..</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <div class="container">
            <div class="section text-center my-4">
                <h2 class="title">Pemberkasan</h2>
            </div>
            <form action="{{route('uploadberkas.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control border px-2" id="" placeholder="Nama Lengkap" name="nama_lengkap"
                            value="{{old('nama_lengkap')}}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Kartu Keluarga</label>
                        <input type="file" class="form-control border px-2" id="" placeholder="Kartu Keluarga" name="kk"
                            value="{{old('kk')}}">
                    </div>
                </div>
                <div class="my-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Akta Kelahiran</label>
                        <input type="file" class="form-control  border px-2" id="" placeholder="Akta Kelahiran" name="akta_kelahiran"
                            value="{{old('akta_kelahiran')}}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">KTP</label>
                        <input type="file" class="form-control  border px-2" id="" placeholder="Ktp" name="ktp" value="{{old('ktp')}}">
                    </div>
                </div>
                <div class="my-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Foto 2x3</label>
                        <input type="file" class="form-control  border px-2" id="" placeholder="Foto 2x3" name="foto_a"
                            value="{{old('foto_a')}}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Foto 3x4</label>
                        <input type="file" class="form-control  border px-2" id="" placeholder="Foto 3x4" name="foto_b"
                            value="{{old('foto_b')}}">
                    </div>
                </div>
                <div class="my-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Foto 4x6</label>
                        <input type="file" class="form-control  border px-2" id="" placeholder="Foto 4x6" name="foto_c"
                            value="{{old('foto_c')}}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Buku Tabungan Lembar (No Rek)</label>
                        <input type="file" class="form-control  border px-2" id="" placeholder="BTL Norek" name="btl_norek"
                            value="{{old('btl_norek')}}">
                    </div>
                </div>
                <div class="my-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Buku Tabungan Lembar (Nominal)</label>
                        <input type="file" class="form-control  border px-2" id="" placeholder="BTL Nominal" name="btl_nominal"
                            value="{{old('btl_nominal')}}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Domisili</label>
                        <input type="file" class="form-control  border px-2" id="" placeholder="Domisili" name="domisili"
                            value="{{old('domisili')}}">
                    </div>
                </div>
                <div class="card-footer text-end">
                    <a href="{{route('home')}}" class="btn btn-secondary">
                        Batal
                    </a>
                    <button type="submit" class="shadow-none btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    @include('ux.layout.footer')
    @include('ux.layout.script')
</body>

</html>
