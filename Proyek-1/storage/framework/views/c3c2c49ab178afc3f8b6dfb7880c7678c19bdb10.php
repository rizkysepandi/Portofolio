<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIABDES | Dashboard</title>
  <link rel="icon" href="<?php echo e(asset('BUMDES/assets/logo/icon-siabdes.png')); ?>" type="image/icon type">
  
  
  
  
  
 
  
  <!-- Custom styles for this template -->
  
  
  <link href="<?php echo e(asset('css/form-btn.css')); ?>" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('template/fontawesome-free/css/all.min.css')); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('template/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('template/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('template/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('template/dist/css/adminlte.min.css')); ?>">

  
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body style="background-color: #D9D9D9" class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php echo $__env->make('bumdes.dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
        <?php echo $__env->make('bumdes.dashboard.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

        <!-- jQuery -->
        <script src="<?php echo e(asset('template/jquery/jquery.min.js')); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo e(asset('template/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- DataTables  & Plugins -->
        <script src="<?php echo e(asset('template/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template/jszip/jszip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template/pdfmake/pdfmake.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template/pdfmake/vfs_fonts.js')); ?>"></script>
        <script src="<?php echo e(asset('template/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(asset('template/dist/js/adminlte.min.js')); ?>"></script>
        <!-- AdminLTE for demo purposes -->
        
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
        
        
        
</body>
</html>
<?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/layouts/main.blade.php ENDPATH**/ ?>