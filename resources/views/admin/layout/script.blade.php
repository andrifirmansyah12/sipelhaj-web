 <!--   Core JS Files   -->
 <script src="{{asset('material-dashboard-2/assets/')}}/js/core/popper.min.js"></script>
 <script src="{{asset('material-dashboard-2/assets/')}}/js/core/bootstrap.min.js"></script>
 <script src="{{asset('material-dashboard-2/assets/')}}/js/plugins/perfect-scrollbar.min.js"></script>
 <script src="{{asset('material-dashboard-2/assets/')}}/js/plugins/smooth-scrollbar.min.js"></script>
 <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
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

 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

 <script>
     $(document).ready(function() {
         $('#table_id').DataTable({
         responsive: {
            details: true
         }
        });
     });
 </script>



 <script>
     var win = navigator.platform.indexOf('Win') > -1;
     if (win && document.querySelector('#sidenav-scrollbar')) {
         var options = {
             damping: '0.5'
         }
         Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
     }
 </script>
 <!-- Github buttons -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>
 <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="{{asset('material-dashboard-2/assets/')}}/js/material-dashboard.min.js?v=3.0.0"></script>
