

<?php $__env->startSection('content'); ?>
<style>
    
    p.hide{
        visibility: hidden;
    }
</style>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jurnal Umum</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="d-flex mb-3" >
                                <div class="ms-auto">
                                    <div>
                                        <?php echo $__env->make('bumdes.dashboard.jurnal_umum.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Jenis Transaksi</th>
                                    <th>Nama Akun</th>
                                    <th>No. Referensi</th>
                                    <th>Debit</th>
                                    <th>Kredit</th>
                                    <th>Bukti Transaksi</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                
                                    <?php if(isset($jurnals)): ?>
                                    <p style="visibility: hidden; height: 0px;"> 
                                        <?php echo e($i =1); ?>

                                    </p>
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i++); ?></td>
                                                <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                <td><?php echo e($jurnal->jenis_transaksi); ?></td>
                                                <td><?php echo e($data->nama_akun); ?></td>
                                                <td><?php echo e($data->noref); ?></td>
                                                <?php if($data->debit == 0): ?>
                                                    <td>-</td>
                                                    <td><?php echo e(($data->formatRupiah('kredit'))); ?></td>
                                                <?php else: ?>
                                                    <td><?php echo e(($data->formatRupiah('debit'))); ?></td>
                                                    <td>-</td>
                                                <?php endif; ?>
                                                <td><a href="/jurnal_umum/<?php echo e($jurnal->id); ?>/download" class="btn btn-primary btn-unduh">Download</a></td>
                                                <td>
                                                    <a href="/jurnal_umum/<?php echo e($data->id); ?>/edit" class="nav-icon fas fa-edit"></a>
                                                    
                                                    <form action="/jurnal_umum/<?php echo e($jurnal->id); ?>/delete" method="POST" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                        <button class="fa fa-trash border-0" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus Data?')"></button>
                                                    </form>
                                                    
                                                </td>
                                                
                                                
                                            </tr> 
                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/jurnal_umum/index.blade.php ENDPATH**/ ?>