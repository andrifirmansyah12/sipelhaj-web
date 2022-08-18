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
                        <h3 class="text-white">Silahkan Isi Kelengkapan Data dan Berkas Anda</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Featuring</h2>
            </div>
        </div>
    </div>

    <div>.</div>

    <div class="container">
    <div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                <i class="material-icons">language</i>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Featuring Biodata</h4>
                    Lengkapi data diri anda segera disini terimakasih. Complete your personal data here, thank you.
            </div>
            <div class="card-footer">
            <a href="{{url('biodata')}}" class="btn btn-primary">Biodata</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                <i class="material-icons">language</i>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Featuring Berkas</h4>
                    Lengkapi berkas anda segera disini terimakasih. Complete your file immediately here, thank you.
            </div>
            <div class="card-footer">
            <a href="{{url('uploadberkas')}}" class="btn btn-primary">Berkas</a>
            </div>
        </div>
    </div>
    </div>
    </div>

@include('ux.layout.footer')
@include('ux.layout.script')
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
</body>
</html>