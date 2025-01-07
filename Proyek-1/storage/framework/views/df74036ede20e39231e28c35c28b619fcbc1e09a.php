

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Data - Penyesuaian</h3>
                        </div>
                        <form action="/<?php echo e($action); ?>" method="post" class="form-container">
                            <?php echo csrf_field(); ?>
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form Ubah Data</h1>
                                    </div>

                                    <h3>Penyesuaian</h3>
                                    <label for="debit" class="fs-5"><b>Debit</b></label>
                                    <input type="number" step="0.01" name="debit" class="form-control bg-grey" value="0" required>
                                    
                                    <label for="kredit" class="fs-5"><b>Kredit</b></label>
                                    <input type="number" step="0.01" name="kredit" class="form-control bg-grey" value="0" required>

                    
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
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/wtb/update.blade.php ENDPATH**/ ?>