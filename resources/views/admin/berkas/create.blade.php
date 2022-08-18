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
                            <h3>Tambah Data Berkas</h3>
                            <hr>
                            
                            <form action="{{route('berkas.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="Nama Lengkap" name="nama_lengkap" value="{{old('nama_lengkap')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" class="form-control" id="" placeholder="Kartu Keluarga" name="kk" value="{{old('kk')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" class="form-control" id="" placeholder="Akta Kelahiran" name="akta_kelahiran" value="{{old('akta_kelahiran')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" class="form-control" id="" placeholder="Ktp" name="ktp" value="{{old('ktp')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" class="form-control" id="" placeholder="Foto 2x3" name="foto_a" value="{{old('foto_a')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" class="form-control" id="" placeholder="Foto 3x4" name="foto_b" value="{{old('foto_b')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" class="form-control" id="" placeholder="Foto 4x6" name="foto_c" value="{{old('foto_c')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" class="form-control" id="" placeholder="BTL Norek" name="btl_norek" value="{{old('btl_norek')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" class="form-control" id="" placeholder="BTL Nominal" name="btl_nominal" value="{{old('btl_nominal')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="file" class="form-control" id="" placeholder="Domisili" name="domisili" value="{{old('domisili')}}">
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