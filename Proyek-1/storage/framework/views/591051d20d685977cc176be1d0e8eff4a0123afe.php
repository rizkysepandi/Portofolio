

<?php $__env->startSection('content'); ?>
    
    <link href="<?php echo e(asset('css/table-resp-btn.css')); ?>" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >INVOICE PENJUALAN TUNAI</h1>
            <div class="ms-auto">
                <?php echo $__env->make('bumdes.dashboard.layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">No. Invoice</th>
                        <th scope="col">Nama Konsumen</th>
                        <th scope="col">Telp Konsumen</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Bukti Transaksi</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    
                         <tr>
                            <th scope="row" rowspan="">20/04/22</th> <!-- tanggal -->
                            <td>1A001</td> <!-- no invoice -->
                            <td>Sulaiman</td> <!-- nama konsumen -->
                            <td>0821-2223-4433</td> <!-- telp konsumen --> 
                            <td>Telur</td> <!-- barang -->    
                            <td>10 kg</td> <!-- jumlah barang -->                  
                            <td><button class="btn btn-primary btn-unduh">Unduh</button></td>                       
                        </tr>
                </tbody>
            </table>
        </div>
    </div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/invoice/invoice_penjualan_tunai/index.blade.php ENDPATH**/ ?>