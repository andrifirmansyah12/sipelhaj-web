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
                            <h3>Edit Data Berkas</h3>
                            <hr>

                            <form action="{{route('berkas.update',$berkas)}}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="my-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control border px-2" id="" placeholder="Nama Lengkap"
                                        name="nama_lengkap" value="{{$berkas->nama_lengkap ?? old('nama_lengkap')}}">
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class="form-label m-0">Kartu Keluarga</label>
                                            <img src="{{ asset('img/'. $berkas->kk) }}" alt="" class="py-2"
                                                style="width: 10rem; height: 7rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                                        </div>
                                        <input type="file" class="form-control border px-2" id=""
                                            placeholder="Kartu Keluarga" name="kk"
                                            value="{{ $berkas->kk ?? old('kk')}}">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class="form-label m-0">Akta Kelahiran</label>
                                            <img src="{{ asset('img/'. $berkas->akta) }}" alt="" class="py-2"
                                                style="width: 10rem; height: 7rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                                        </div>
                                        <input type="file" class="form-control border px-2" id=""
                                            placeholder="Akta Kelahiran" name="akta_kelahiran"
                                            value="{{$berkas->akta ?? old('akta')}}">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class="form-label m-0">Ktp</label>
                                            <img src="{{ asset('img/'. $berkas->ktp) }}" alt="" class="py-2"
                                                style="width: 10rem; height: 7rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                                        </div>
                                        <input type="file" class="form-control border px-2" id="" placeholder="Ktp"
                                            name="ktp" value="{{$berkas->ktp ?? old('ktp')}}">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class="form-label m-0">Foto 2x3</label>
                                            <img src="{{ asset('img/'. $berkas->foto_a) }}" alt="" class="py-2"
                                                style="width: 10rem; height: 7rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                                        </div>
                                        <input type="file" class="form-control border px-2" id="" placeholder="Foto 2x3"
                                            name="foto_a" value="{{$berkas->foto_a ?? old('foto_a')}}">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class="form-label m-0">Foto 3x4</label>
                                            <img src="{{ asset('img/'. $berkas->foto_b) }}" alt="" class="py-2"
                                                style="width: 10rem; height: 7rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                                        </div>
                                        <input type="file" class="form-control border px-2" id="" placeholder="Foto 3x4"
                                            name="foto_b" value="{{$berkas->foto_b ?? old('foto_b')}}">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class="form-label m-0">Foto 4x6</label>
                                            <img src="{{ asset('img/'. $berkas->foto_c) }}" alt="" class="py-2"
                                                style="width: 10rem; height: 7rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                                        </div>
                                        <input type="file" class="form-control border px-2" id="" placeholder="Foto 4x6"
                                            name="foto_c" value="{{$berkas->foto_c ?? old('foto_c')}}">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class="form-label m-0">Buku Tabungan Lembar (No Rek)</label>
                                            <img src="{{ asset('img/'. $berkas->btl_norek) }}" alt="" class="py-2"
                                                style="width: 10rem; height: 7rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                                        </div>
                                        <input type="file" class="form-control border px-2" id=""
                                            placeholder="BTL Norek" name="btl_norek"
                                            value="{{$berkas->btl_norek ?? old('btl_norek')}}">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class="form-label m-0">Buku Tabungan Lembar (Nominal)</label>
                                            <img src="{{ asset('img/'. $berkas->btl_nominal) }}" alt="" class="py-2"
                                                style="width: 10rem; height: 7rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                                        </div>
                                        <input type="file" class="form-control border px-2" id=""
                                            placeholder="BTL Nominal" name="btl_nominal"
                                            value="{{$berkas->btl_nominal ?? old('btl_nominal')}}">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class="form-label m-0">Domisili</label>
                                            <img src="{{ asset('img/'. $berkas->domisili) }}" alt="" class="py-2"
                                                style="width: 10rem; height: 7rem; -o-object-fit: cover; object-fit: cover; -o-object-position: center; object-position: center;">
                                        </div>
                                        <input type="file" class="form-control border px-2" id="" placeholder="Domisili"
                                            name="domisili" value="{{$berkas->domisili ?? old('domisili')}}">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{route('berkas.index')}}" class="btn btn-default">
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
