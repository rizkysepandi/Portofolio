

<?php $__env->startSection('content'); ?>
<div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
    <div class="d-flex justify-content-center mb-4" style="margin-top: -50px">
        
        <form action="/pemasukan_kas/create" method="post" class="form-container">
            <?php echo csrf_field(); ?>
            <div class="d-flex">
                
                <div>

                    <div class="text-center">
                        <h1>Form Tambah Data</h1>
                    </div>
                    <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data</p>

                    <div class="mt-3">

                        <label for="nama_akun" class="form-label fs-4"><b>Uraian Jurnal</b></label>
                        <div class="">
                            
                            <select id="nama_akun" name="nama_akun" class="fs-5">
                                <?php $__currentLoopData = $nama_akuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama_akun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($nama_akun->d_k != ''): ?>
                                    <option value="<?php echo e($nama_akun->nama); ?>"><?php echo e($nama_akun->nama); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </select>
                        </div>
                    </div>

                    <label for="debit" class="fs-5"><b>Debit</b></label>
                    <input type="number" name="debit" class="form-control bg-grey" value="0" required>

                    <label for="kredit" class="fs-5"><b>Kredit</b></label>
                    <input type="number" name="kredit" class="form-control bg-grey" value="0" required>
    
                    <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Tambah</button>
                    <a href="/pemasukan_kas" type="button" class="btn btn-success mt-3  fw-semibold" style="">Selesai</a>
                </div>
                
            </div>
        </form>
        
        
        
    </div>
    
</div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/jurnal_khusus/pemasukan_kas/create.blade.php ENDPATH**/ ?>