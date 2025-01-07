

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e($title); ?> Data - User</h3>
                        </div>
                        <form action="/<?php echo e($action); ?>" method="post" class="form-container">
                            <?php echo csrf_field(); ?>
                            <div >
                                <div>
                                    <div class="text-center">
                                        <h1>Form <?php echo e($title); ?> User</h1>
                                    </div>
            

                                    <label for="nama" class="fs-5"><b>Nama</b></label>
                                    <input type="text" placeholder="Masukkan Nama" name="nama" value="<?php echo e(isset($data)?$data->nama:''); ?>" required>

                                    <label for="email" class="fs-5"><b>Email</b></label>
                                    <input type="text" placeholder="Masukkan Email" name="email" value="<?php echo e(isset($data)?$data->email:''); ?>" required>

                                    <label for="role" class="form-label fs-4"><b>Role</b></label>
                                        <div class="mb-3">
                                            
                                            <select id="role" name="role" class="form-control" >
                                                <option value="operator">Operator</option>
                                                <option value="pelihat">Pelihat</option>
                                                
                                            </select>
                                        </div>
                                    
                                    <label for="company_id" class="form-label fs-4"><b>Company</b></label>
                                        <div class="">
                                            
                                            <select id="company_id" name="company_id" class="form-control" >
                                                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($company->id); ?>"><?php echo e($company->nama); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            </select>
                                        </div>
                                    <p >Belum ada Company? <a href="/create_company">Klik Disini!</a> </p>

                                    <div class="">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-label fs-4 " placeholder="Enter Password" name="password" required>
                                        
                                    </div>

                    
                                    <button type="submit" class="btn mt-5" style="background-color: #3C4B64">Simpan</button>
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
<?php echo $__env->make('bumdes.dashboard_admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard_admin/create_user/index.blade.php ENDPATH**/ ?>