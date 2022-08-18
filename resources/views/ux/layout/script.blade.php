<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
 {!! Toastr::message() !!}

 <script>
  //message with toastr
  @if(session()->has('success'))

     toastr.success('{{ session('success') }}', 'BERHASIL!');

  @elseif(session()->has('error'))

     toastr.error('{{ session('error') }}', 'GAGAL!');

  @endif
</script>