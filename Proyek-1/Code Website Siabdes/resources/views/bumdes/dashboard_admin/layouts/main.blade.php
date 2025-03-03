<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  {{-- <script src="../assets/js/color-modes.js"></script> --}}
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIABDES | Dashboard Admin</title>
  <link rel="icon" href="{{asset('BUMDES/assets/logo/icon-siabdes.png')}}" type="image/icon type">
  
  {{-- bootstrap core css --}}
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
  
 
  
  <!-- Custom styles for this template -->
  {{-- <link href="{{asset('css/dashboard.css')}}" rel="stylesheet"> --}}
  {{-- Style Form Tambah --}}
  <link href="{{asset('css/form-btn.css')}}" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('template/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">

  {{-- icon bootstrap --}}
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body style="background-color: #D9D9D9" class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('bumdes.dashboard_admin.layouts.navbar')
    
        @include('bumdes.dashboard_admin.layouts.sidebar')
        @yield('content')
    </div>
    {{-- <div class="container-fluid" >
    <div class="row" >
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5" >
        
        </main>
    </div>
    </div> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

        <!-- jQuery -->
        <script src="{{asset('template/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('template/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{asset('template/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('template/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('template/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('template/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('template/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('template/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('template/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('template/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('template/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('template/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('template/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('template/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        {{-- <script src="{{asset('template/dist/js/demo.js')}}"></script> --}}
        <!-- Page specific script -->
        <script>
            $(function () {
              $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
              }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
              });
            });
        </script>

        <script>
          $(function()
          {
            $(".datepicker").datepicker();
          });
        </script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script> --}}
        {{-- <script src="{{asset('js/dashboard.js')}}"></script> --}}
        {{-- <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }
        </script> --}}
</body>
</html>
