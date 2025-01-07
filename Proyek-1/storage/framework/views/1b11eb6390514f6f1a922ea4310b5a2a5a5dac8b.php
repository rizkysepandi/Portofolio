<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #3C4B64">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar" >
        <!-- Sidebar user (optional) -->
        <div class="mt-3 pb-3 d-flex">
            <div>
            <img src="<?php echo e(asset('BUMDES/assets/logo/logo-siabdes.png')); ?>" class=" elevation-2" width="200px" height="60px" alt="SIABDES Logo">
            </div>
        </div>
        <div class="pb-3 mb-3 d-flex">
            <div>
            <img src="<?php echo e(asset('BUMDES/assets/logo/logo-btp-png.png')); ?>" class="elevation-2" width="200px" height="60px" alt="BTP Logo">
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                
                <li class="nav-item">
                    <a href="/dashboard_admin" class="nav-link">
                    <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/create_user" class="nav-link">
                    <p>Create User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/create_company" class="nav-link">
                    <p>Create Company</p>
                    </a>
                </li>
                
            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard_admin/layouts/sidebar.blade.php ENDPATH**/ ?>