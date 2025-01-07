
 
<?php $__env->startSection('title', 'Kontak Kami'); ?>
 
<?php $__env->startSection('sidebar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('sidebar'); ?>
 
    
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>

    <div class="container" style="height:80%;margin-top:12rem">
        <div >
            <div class="text-center">
                <p style="font-size: 20px;color:black">Kontak Kami</p>
                <p class="fw-bold text-black" style="font-size: 40px">Kontak Informasi</p>
            </div>
            <div>
                <table class="d-flex justify-content-center" style="margin-top: 7rem">
                    <tr>
                        <td colspan="2">
                            <table >
                                <tr class="mb-4 " >
                                    <td>
                                        <img class="me-4 my-3" src="<?php echo e(asset('BUMDES/assets/halaman_awal/Alamat.png')); ?>" width="70px" height="70px" alt="Alamat-icon">
                                    </td>
                                    <td>Alamat <br> Gedung D, Bandung Techno Park, Bandung Indonesia</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="me-4 my-3" src="<?php echo e(asset('BUMDES/assets/halaman_awal/Telepon.png')); ?>" width="70px" height="70px alt="Telepon-icon">
                                    </td>
                                    <td>Telepon <br>+62 823-2327-9944</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="me-4 my-3" src="<?php echo e(asset('BUMDES/assets/halaman_awal/Email.png')); ?>" width="70px" height="70px alt="Email-icon">
                                    </td>
                                    <td>Email <br> siabdeswebapp@gmail.com</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <img class="d-flex justify-content-end" src="<?php echo e(asset('BUMDES/assets/halaman_awal/customerSupport.png')); ?>" alt="customer-support-icon">
                        </td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/initialPage/kontak.blade.php ENDPATH**/ ?>