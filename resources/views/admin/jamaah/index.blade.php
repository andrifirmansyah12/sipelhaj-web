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
                            <h3>Data Jemaah</h3>
                            <hr>
                            <a href="{{route('jamaah.create')}}" class="btn btn-primary mb-2">
                                Tambah
                            </a>
                            <table class="table table-hover table-bordered table-stripped" id="table_id">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>No. Telp</th>
                                        <th>Keterangan</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jamaah as $key => $data)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{\Carbon\Carbon::parse($data->tgl_daftar)->isoFormat('D MMMM Y')}}</td>
                                        <td>{{$data->nama_lengkap}}</td>
                                        <td>{{$data->tgl_lahir}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td>{{$data->no_telp}}</td>
                                        <td>{{$data->keterangan}}</td>
                                        <td>
                                            <a href="{{route('jamaah.edit', $data)}}" class="fa fa-edit"></a>
                                            |
                                            <a href="{{route('jamaah.destroy', $data)}}" onclick="notificationBeforeDelete(event, this)" class="fa fa-trash"></a>
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
