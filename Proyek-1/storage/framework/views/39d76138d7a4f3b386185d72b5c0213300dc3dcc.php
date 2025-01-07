

<?php $__env->startSection('content'); ?>
    
    
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex justify-content-center mb-4" style="margin-top: -50px">
            
            <form action="/penjualan/create" method="post" class="form-container">
                <?php echo csrf_field(); ?>
                <div class="d-flex">
                    
                    <div>

                        <div class="text-center">
                            <h1>Form Tambah Data</h1>
                        </div>
                        <p class="fs-5" style="color: #8F9CA9">isi form dibawah ini untuk menambah data</p>

                        <label for="tanggal" class="fs-5"><b>Tanggal Transaksi</b></label>
                        <input type="text" placeholder="DD/MM/YYYY" name="tanggal" required>

                        <label for="no_faktur" class="fs-5"><b>No.Faktur</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="no_faktur" required>

                        <label for="keterangan" class="fs-5"><b>Keterangan</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="keterangan" required>

                        <label for="noref" class="fs-5"><b>Ref</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="noref" required>

                        <label for="syarat_pembayaran" class="fs-5"><b>Syarat Pembayaran</b></label>
                        <input type="text" placeholder="Ketik Masukkan.." name="syarat_pembayaran" required>

                        
                        <label for="piutang_dagang" class="fs-5 mb-2"><b>Piutang Dagang (D)</b></label>
                        <input type="number" name="piutang_dagang" class="form-control mb-4" value="0" required> 

                        
                        <label for="penjualan" class="fs-5 mb-2"><b>Penjualan (K)</b></label>
                        <input type="number" name="penjualan" class="form-control" value="0" required> 
        
                        <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Tambah</button>
                    </div>
                    
                </div>
            </form>
            
            
            
        </div>
        
    </div>
    </div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/jurnal_khusus/penjualan/create.blade.php ENDPATH**/ ?>