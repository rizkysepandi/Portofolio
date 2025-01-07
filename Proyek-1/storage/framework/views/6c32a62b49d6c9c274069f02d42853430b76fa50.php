

<?php $__env->startSection('content'); ?>
    
    <link href="<?php echo e(asset('css/table-resp-btn.css')); ?>" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >FORMULIR PENGIRIMAN BARANG</h1>
            <div class="ms-auto">
                <?php echo $__env->make('bumdes.dashboard.layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Penerima</th>
                        <th scope="col">Alamat Penerima</th>
                        <th scope="col">Telp Penerima</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Alamat Pengirim</th>
                        <th scope="col">Bukti Transaksi</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    
                         <tr>
                            <th scope="row" rowspan="">17/04/23</th> <!-- tanggal -->
                            <td>Syamsudin (BUMDes Sejahtera)</td> <!-- nama penerima -->
                            <td>Jl. Sukapura No 1006 Bandung</td> <!-- alamat penerima -->
                            <td>0899-9923-3522</td> <!-- telp penerima --> 
                            <td>Mamat (Sachio Baso dan Agen Telur)</td> <!-- nama pengirim -->    
                            <td>Jl. Kamarasan Residence BI D1 No. 3, Buah Batu, Bojongsoang, Bandung, Jawa Barat 40287</td> <!-- alamat pengirim -->                  
                            <td><button class="btn btn-primary btn-unduh">Unduh</button></td>                       
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/invoice/form_pengiriman_barang/index.blade.php ENDPATH**/ ?>