<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: #3C4B64">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/dashboard"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/logo-siabdes.jpg')); ?>" width="180px" height="40px">
        <img src="<?php echo e(asset('BUMDES/assets/logo/logo-btp-png.png')); ?>" alt="" width="120px" height="50px"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary mx-3 text-black fw-semibold px-4 border-0" style="background-color: #D9D9D9">Logout</button>
            </form>
        </div>
        
    </div>
</header><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/layouts/header.blade.php ENDPATH**/ ?>