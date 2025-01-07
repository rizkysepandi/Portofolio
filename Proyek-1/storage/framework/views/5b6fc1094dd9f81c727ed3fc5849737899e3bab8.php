

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dashboard Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                    <th>ID User</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Company</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                
                                    <?php if(isset($users)): ?>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($user->id); ?></td>
                                                <td><?php echo e($user->nama); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->role); ?></td>
                                                <td><?php echo e($user->company->nama); ?></td>
                                                <td>
                                                    <a href="/create_user/<?php echo e($user->id); ?>/edit" class="nav-icon fas fa-edit"></a>
                                                    
                                                    <form action="" method="POST" class="d-inline">
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

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>ID Company</th>
                                        <th>Company Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                
                                    <?php if(isset($companies)): ?>
                                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($company->id); ?></td>
                                                <td><?php echo e($company->nama); ?></td>
                                                <td>
                                                    <a href="/create_company/<?php echo e($company->id); ?>/edit" class="nav-icon fas fa-edit"></a>
                                                    
                                                    <form action="" method="POST" class="d-inline">
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
<?php echo $__env->make('bumdes.dashboard_admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard_admin/index.blade.php ENDPATH**/ ?>