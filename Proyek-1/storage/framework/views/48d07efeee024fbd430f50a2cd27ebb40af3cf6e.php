

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                        <div class="card-header" style="margin-top:3rem;background-color:white" class="px-5 rounded-3 pb-1">
                            <div d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3>
                                <h1 class="h2">Selamat Datang, <?php echo e(auth()->user()->nama); ?> di <?php echo e(auth()->user()->company->nama); ?></h1>
                            </div>
                        </div>
                  <!-- /.card -->
                
                    <div class="d-flex justify-content-center border-0">
                                <div class="card mx-4 my-5 border-0" style="width: 18rem;background-color: #D9D9D9;">
                                    <div class="card-body rounded-4" style="background-color: #38C976">
                                        <p class="card-text"><small class=" text-white">25/10/2021</small></p>
                                        <h5 class="card-title fs-4 text-white">Total Pemasukan</h5>
                                        <p class="card-text fs-5 fw-semibold text-white">Rp. 22.500.000</p>
                                    </div>
                                </div>
                                <div class="card mx-4 my-5 border-0" style="width: 18rem;background-color: #D9D9D9;">
                                    <div class="card-body rounded-4" style="background-color: #FE5050">
                                        <p class="card-text"><small class=" text-white">25/10/2021</small></p>
                                        <h5 class="card-title fs-4 text-white">Total Pengeluaran</h5>
                                        <p class="card-text fs-5 fw-semibold text-white">Rp. 22.500.000</p>
                                    </div>
                                </div>
                                <div class="card mx-4 my-5 border-0" style="width: 18rem;background-color: #D9D9D9;">
                                    <div class="card-body rounded-4" style="background-color: #3EAEFF">
                                        <p class="card-text"><small class=" text-white">25/10/2021</small></p>
                                        <h5 class="card-title fs-4 text-white">Laba Bersih</h5>
                                        <p class="card-text fs-5 fw-semibold text-white">Rp. 22.500.000</p>
                                    </div>
                                </div>
                                <div class="card mx-4 my-5 border-0" style="width: 18rem;background-color: #D9D9D9;">
                                    <div class="card-body rounded-4" style="background-color: #FFA23A">
                                        <p class="card-text"><small class=" text-white">25/10/2021</small></p>
                                        <h5 class="card-title fs-4 text-white">Laba Kotor</h5>
                                        <p class="card-text fs-5 fw-semibold text-white">Rp. 22.500.000</p>
                                    </div>
                                </div>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/index.blade.php ENDPATH**/ ?>