

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jurnal Khusus - Pemasukan Kas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="d-flex mb-3" >
                                <div class="ms-auto">
                                    <?php echo $__env->make('bumdes.dashboard.jurnal_khusus.pemasukan_kas.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Kelola Akun</th>
                                    <th>Uraian Jurnal</th>
                                    <th>Debit</th>
                                    <th>Kredit</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                
                                    <?php if(isset($jurnals)): ?>
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($jurnal->id); ?></td>
                                                <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                <td><?php echo e($data->noref); ?></td>
                                                <td><?php echo e($data->nama_akun); ?></td>
                                                <?php if($data->debit == 0): ?>
                                                    <td>-</td>
                                                    <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                <?php else: ?>
                                                    <td><?php echo e($data->formatRupiah('debit')); ?></td>
                                                    <td>-</td>
                                                <?php endif; ?>

                                                <td>
                                                    <a href="/pemasukan_kas/<?php echo e($data->id); ?>/edit" class="nav-icon fas fa-edit"></a>
                                                    
                                                    <form action="/pemasukan_kas/<?php echo e($jurnal->id); ?>/delete" method="POST" class="d-inline">
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
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/jurnal_khusus/pemasukan_kas/index.blade.php ENDPATH**/ ?>