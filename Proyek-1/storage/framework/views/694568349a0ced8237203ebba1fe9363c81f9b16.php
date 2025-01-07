

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data - Jurnal Umum</h3>
                        </div>
                        <form action="/jurnal_umum/create" method="post" class="form-container">
                            <?php echo csrf_field(); ?>
                            <div class="d-flex">
                                <div>
                                    <div class="text-center">
                                        <h1>Form Tambah Data</h1>
                                    </div>
                                    <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data jurnal umum</p>
                                    <div class="mt-3">

                                        <label for="nama_akun" class="form-label fs-4"><b>Nama Akun</b></label>
                                        <div class="">
                                            
                                            <select id="nama_akun" name="nama_akun" class="" >
                                                <?php $__currentLoopData = $nama_akuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama_akun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($nama_akun->d_k != ''): ?>
                                                    <option value="<?php echo e($nama_akun->nama); ?>"><?php echo e($nama_akun->nama); ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <label for="debit" class="fs-5 mb-2"><b>Debit</b></label>
                                    <input type="number" name="debit" class="form-control mb-4" value="0" required> 
            
                                    
                                    <label for="kredit" class="fs-5 mb-2"><b>Kredit</b></label>
                                    <input type="number" name="kredit" class="form-control" value="0" required> 
                                    
                                    <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Tambah</button>
                                    <a href="/jurnal_umum" type="button" class="btn btn-success mt-3  fw-semibold" style="">Selesai</a>

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
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/jurnal_umum/create.blade.php ENDPATH**/ ?>