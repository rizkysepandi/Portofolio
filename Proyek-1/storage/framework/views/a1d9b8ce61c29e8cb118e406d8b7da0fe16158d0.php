

<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('css/table-resp-btn.css')); ?>" rel="stylesheet">
    <div style="margin-top:3rem;margin-bottom: 3rem;padding-bottom:5rem;padding-top:6rem;background-color:white" class="px-5 rounded-4">
        <div class="d-flex mb-4" style="margin-top: -50px">
            <h1 >JURNAL KHUSUS - PENJUALAN</h1>
            <div class="ms-auto">
            <button class="open-button" ><a href="/penjualan/create" style="text-decoration: none; color: white;">+ Tambah</a></button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-white text-center" style="background-color: #3C4B64">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">No. Faktur</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Ref</th>
                        <th scope="col">Syarat Pembayaran</th>
                        <th scope="col">Piutang Dagang (D)</th>
                        <th scope="col">Penjualan (K)</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-center">
                    <tr>
                        <td></td>    
                        <td></td>
                        <td>toko x</td>
                        <td>8000</td>
                        <td>x/n, n/30</td>
                        <td>100.000</td>
                        <td>100.000</td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td></td>
                        <td>toko y</td>
                        <td>8000</td>
                        <td>x/n, n/30</td>
                        <td>200.000</td>
                        <td>200.000</td>
                    </tr>
                    <tr>
                        <td></td>    
                        <td></td>
                        <td>toko z</td>
                        <td>8000</td>
                        <td>x/n, n/30</td>
                        <td>500.000</td>
                        <td>500.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/jurnal_khusus/penjualan/index.blade.php ENDPATH**/ ?>