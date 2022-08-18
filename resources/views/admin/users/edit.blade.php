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
                            <h3>Edit Manajemen Akun</h3>
                            <hr>
                            
                            <form action="{{route('users.update', $user)}}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="" placeholder="" name="name" value="{{$user->name ?? old('name')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" id="" placeholder="" name="email" value="{{$user->email ?? old('email')}}">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <select name="is_admin" id="" class="form-control">
                                        <option>----- Pilih Opsi -----</option>
                                        <option if="" ($is_admin="=" 1="" )="" echo="" 'selected'="" ;="" ?="">1</option>
                                        <option if="" ($is_admin="=" 0="" )="" echo="" 'selected'="" ;="" ?="">0</option>
                                    </select>
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" id="" placeholder="" name="password">
                                </div>
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="" placeholder="" name="password_confirmation">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{route('users.index')}}" class="btn btn-default">
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