<nav class="main-header navbar navbar-expand navbar-dark navbar-black " style="background-color: #3C4B64">
    <!-- Left navbar links -->
    <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block ">
          <a href="/dashboard" class="nav-link ">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item mr-5">
          <div class="user-panel  d-flex">
            
            <div class="info">
              
              <h4 class="text-white"><?php echo e(auth()->user()->company->nama); ?></h4>
            </div>
          </div>
        </li>
      
        <li class="nav-item">
          <form action="/logout" method="post">
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-primary mx-3 text-black fw-semibold px-4 border-0" style="background-color: #686565">Logout</button>
          </form>
        </li>
    </ul>
</nav><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard_admin/layouts/navbar.blade.php ENDPATH**/ ?>