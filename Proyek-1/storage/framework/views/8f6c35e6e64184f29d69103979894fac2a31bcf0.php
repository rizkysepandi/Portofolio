

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Master - Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="d-flex mb-3" >
                                <div class="ms-auto">
                                    <a href="/barang/create" type="button" class="btn btn-primary" style="
                                    text-decoration: none; 
                                    color: white;
                                    background-color: #0b297c;
                                    color: white;
                                    padding: 16px 20px;
                                    border: none;
                                    cursor: pointer;
                                    opacity: 0.8;
                                    width: 150px;
                                    border-radius: 10px;
                                    font-size: 15px;
                                    font-weight: 500;">+ Tambah</a>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Satuan</th>
                                    <th>Stok Awal</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Beli</th>
                                    <th>Jumlah Barang Masuk</th>
                                    <th>Jumlah Barang Keluar</th>
                                    <th>Stok Akhir</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php if(isset($datas)): ?>
                                    <p style="visibility: hidden; height: 0px;"> 
                                        <?php echo e($i =1); ?>

                                    </p>
                                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($i++); ?></td>
                                            <td><?php echo e($data->tanggal->format('d F Y')); ?></td>
                                            <td><?php echo e($data->kode_barang); ?></td>
                                            <td><?php echo e($data->nama_barang); ?></td>
                                            <td><?php echo e($data->satuan); ?></td>
                                            <td><?php echo e($data->stok_awal); ?></td>
                                            <td><?php echo e($data->harga_jual); ?></td>
                                            <td><?php echo e($data->harga_beli); ?></td>
                                            <td><?php echo e($data->jumlah_barang_masuk); ?></td>
                                            <td><?php echo e($data->jumlah_barang_keluar); ?></td>
                                            <td><?php echo e($data->stok_akhir); ?></td>
                                            <td>
                                                <a href="/barang/<?php echo e($data->id); ?>/edit" class="nav-icon fas fa-edit"></a>
                                                
                                                <form action="/barang/<?php echo e($data->id); ?>/delete" method="POST" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                    <button class="fa fa-trash border-0" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus Data?')"></button>
                                                </form>
                                                
                                            </td>
                                            
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
    </div>
    

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/data_master/barang/index.blade.php ENDPATH**/ ?>