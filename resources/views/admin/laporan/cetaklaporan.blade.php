<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')

<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row min-vh-80 h-100">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-justify">Laporan Pertanggal</h5>
                            <hr>
                            <table class="table table-hover table-bordered table-stripped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Lengkap</th>
                                        <th>Debet</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cetaklaporan as $key => $item)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->tgl_transaksi)->isoFormat('D MMMM Y')}}</td>
                                        <td>{{$item->nama_lengkap}}</td>
                                        <td>{{$item->debet}}</td>
                                        <td>{{$item->keterangan}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <script type="text/javascript">
                            window.print();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('admin.layout.script')


</body>

</html>
