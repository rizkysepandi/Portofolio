

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e($title); ?> Data - Company</h3>
                        </div>
                        <form action="/<?php echo e($action); ?>" method="post" class="form-container">
                            <?php echo csrf_field(); ?>
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form <?php echo e($title); ?> Company</h1>
                                    </div>
            

                                    <label for="nama" class="fs-5"><b>Nama</b></label>
                                    <input type="text" placeholder="Masukkan Nama" name="nama" value="<?php echo e(isset($data)?$data->nama:''); ?>" required>

                    
                                    <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('bumdes.dashboard_admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard_admin/create_company/index.blade.php ENDPATH**/ ?>