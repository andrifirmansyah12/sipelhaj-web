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
                            <h3>Data Jadwal</h3>
                            <hr>
                            <a href="{{route('jadwal.create')}}" class="btn btn-primary mb-2">
                                Tambah
                            </a>
                            <table class="table table-hover table-bordered table-stripped" id="table_id">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Miladiyah</th>
                                        <th>Tanggal Huriyah</th>
                                        <th>Kegiatan</th>
                                        <th>Waktu</th>
                                        <th>Tempat</th>
                                        <th>Keterangan</th>
                                        <th>Opsi</th>
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
                                        <td>
                                            <a href="{{route('jadwal.edit', $jadwal)}}" class="fa fa-edit"></a>
                                            |
                                            <a href="{{route('jadwal.destroy', $jadwal)}}" onclick="notificationBeforeDelete(event, this)" class="fa fa-trash"></a>
                                        </td>
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

    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>


</body>

</html>
