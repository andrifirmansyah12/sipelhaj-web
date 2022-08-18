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
                            <h3>Tambah Jadwal</h3>
                            <hr>
                            
                            <form action="{{route('jadwal.store')}}" method="POST">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="date" class="form-control" id="" placeholder="Tanggal Miladiyah" name="tgl_miladiyah" value="{{old('tgl_miladiyah')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="Tanggal Huriyah" name="tgl_huriyah" value="{{old('tgl_huriyah')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="Kegiatan" name="kegiatan" value="{{old('kegiatan')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="time" class="form-control" id="" placeholder="Waktu" name="waktu" value="{{old('waktu')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="Tempat" name="tempat" value="{{old('tempat')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label"></label>
                                    <input type="text" class="form-control" id="" placeholder="Keterangan" name="keterangan" value="{{old('keterangan')}}">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{route('jadwal.index')}}" class="btn btn-default">
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