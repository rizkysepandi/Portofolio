

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Working Trial Balance</h3>
                        </div>
                        
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr class="align-middle" >
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Nama Akun</th>
                                        <th colspan="2">Neraca Saldo</th>
                                        <th colspan="2">Penyesuaian</th>
                                        <th colspan="2">Neraca Setelahnya</th>
                                        <th colspan="2">Laba Rugi</th>
                                        <th colspan="2">Neraca</th>
                                        <th rowspan="2">Action</th>
                                    </tr>
                                    <tr class="align-top">
                                        <th>Debit</th>
                                        <th>Kredit</th>
                                        <th>Debit</th>
                                        <th>Kredit</th>
                                        <th>Debit</th>
                                        <th>Kredit</th>
                                        <th>Debit</th>
                                        <th>Kredit</th>
                                        <th>Debit</th>
                                        <th>Kredit</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <th scope="row" rowspan="">1</th>
                                        <td>Kas</td> <!-- // nama akun -->
                                        <?php if($saldo['kas'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['kas'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['kas'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['kas'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['kas'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['kas'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['kas'] + $penyesuaian['kas'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas'] + $penyesuaian['kas'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas'] + $penyesuaian['kas'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kas'] + $penyesuaian['kas']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['kas'] + $penyesuaian['kas'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas'] + $penyesuaian['kas'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas'] + $penyesuaian['kas'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kas'] + $penyesuaian['kas']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Kas/edit" class="nav-icon fas fa-edit"></a>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">2</th>
                                        <td>Kas di Bank A</td> <!--// nama akun -->
                                        <?php if($saldo['kas_di_bank_a'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_a'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_di_bank_a'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_a'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['kas_di_bank_a'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['kas_di_bank_a'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['kas_di_bank_a'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['kas_di_bank_a'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kas_di_bank_a'] + $penyesuaian['kas_di_bank_a']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Kas di Bank A/edit" class="nav-icon fas fa-edit"></a>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">3</th>
                                        <td>Kas di Bank B</td>
                                        <?php if($saldo['kas_di_bank_b'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_b'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_di_bank_b'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_b'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['kas_di_bank_b'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['kas_di_bank_b'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['kas_di_bank_b'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['kas_di_bank_b'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kas_di_bank_b'] + $penyesuaian['kas_di_bank_b']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Kas di Bank B/edit" class="nav-icon fas fa-edit"></a>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">4</th>
                                        <td>Kas di Bank C</td>
                                        <?php if($saldo['kas_di_bank_c'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_c'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_di_bank_c'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_c'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['kas_di_bank_c'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['kas_di_bank_c'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['kas_di_bank_c'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['kas_di_bank_c'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kas_di_bank_c'] + $penyesuaian['kas_di_bank_c']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Kas di Bank C/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">5</th>
                                        <td>Kas Kecil</td> <!--// nama akun -->
                                        <?php if($saldo['kas_kecil'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_kecil'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_kecil'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['kas_kecil'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['kas_kecil'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['kas_kecil'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['kas_kecil'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['kas_kecil'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['kas_kecil'] + $penyesuaian['kas_kecil'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_kecil'] + $penyesuaian['kas_kecil'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_kecil'] + $penyesuaian['kas_kecil'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kas_kecil'] + $penyesuaian['kas_kecil']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['kas_kecil'] + $penyesuaian['kas_kecil'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kas_kecil'] + $penyesuaian['kas_kecil'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kas_kecil'] + $penyesuaian['kas_kecil'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kas_kecil'] + $penyesuaian['kas_kecil']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Kas Kecil/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">6</th>
                                        <td>Giro</td> <!--// nama akun -->
                                        <?php if($saldo['giro'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['giro'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['giro'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['giro'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['giro'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['giro'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['giro'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['giro'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['giro'] + $penyesuaian['giro'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['giro'] + $penyesuaian['giro'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['giro'] + $penyesuaian['giro'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['giro'] + $penyesuaian['giro']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['giro'] + $penyesuaian['giro'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['giro'] + $penyesuaian['giro'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['giro'] + $penyesuaian['giro'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['giro'] + $penyesuaian['giro']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Giro/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">7</th>
                                        <td>Deposito</td> <!--// nama akun -->
                                        <?php if($saldo['deposito'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['deposito'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['deposito'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['deposito'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['deposito'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['deposito'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['deposito'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['deposito'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['deposito'] + $penyesuaian['deposito'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['deposito'] + $penyesuaian['deposito'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['deposito'] + $penyesuaian['deposito'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['deposito'] + $penyesuaian['deposito']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['deposito'] + $penyesuaian['deposito'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['deposito'] + $penyesuaian['deposito'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['deposito'] + $penyesuaian['deposito'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['deposito'] + $penyesuaian['deposito']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Deposito/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">8</th>
                                        <td>Piutang Usaha</td> <!--// nama akun -->
                                        <?php if($saldo['piutang_usaha'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['piutang_usaha'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['piutang_usaha'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['piutang_usaha'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['piutang_usaha'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['piutang_usaha'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['piutang_usaha'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['piutang_usaha'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['piutang_usaha'] + $penyesuaian['piutang_usaha']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Piutang Usaha/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">9</th>
                                        <td>Persediaan Barang Dagangan</td> <!--// nama akun -->
                                        <?php if($saldo['persediaan_barang_dagang'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['persediaan_barang_dagang'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['persediaan_barang_dagang'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['persediaan_barang_dagang'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['persediaan_barang_dagang'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['persediaan_barang_dagang'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['persediaan_barang_dagang'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['persediaan_barang_dagang'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['persediaan_barang_dagang'] + $penyesuaian['persediaan_barang_dagang']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Persediaan Barang Dagangan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">10</th>
                                        <td>Persediaan Makan dan Minuman</td> <!--// nama akun -->
                                        <?php if($saldo['persediaan_makan_dan_minuman'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['persediaan_makan_dan_minuman'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['persediaan_makan_dan_minuman'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['persediaan_makan_dan_minuman'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['persediaan_makan_dan_minuman'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['persediaan_makan_dan_minuman'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['persediaan_makan_dan_minuman'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['persediaan_makan_dan_minuman'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['persediaan_makan_dan_minuman'] + $penyesuaian['persediaan_makan_dan_minuman']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Persediaan Makan dan Minuman/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">11</th>
                                        <td>Perlengkapan</td> <!--// nama akun -->
                                        <?php if($saldo['perlengkapan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['perlengkapan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['perlengkapan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['perlengkapan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['perlengkapan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['perlengkapan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['perlengkapan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['perlengkapan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['perlengkapan'] + $penyesuaian['perlengkapan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['perlengkapan'] + $penyesuaian['perlengkapan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['perlengkapan'] + $penyesuaian['perlengkapan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['perlengkapan'] + $penyesuaian['perlengkapan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['perlengkapan'] + $penyesuaian['perlengkapan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['perlengkapan'] + $penyesuaian['perlengkapan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['perlengkapan'] + $penyesuaian['perlengkapan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['perlengkapan'] + $penyesuaian['perlengkapan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Perlengkapan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">12</th>
                                        <td>Sewa Dibayar Dimuka</td> <!--// nama akun -->
                                        <?php if($saldo['sewa_dibayar_dimuka'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['sewa_dibayar_dimuka'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['sewa_dibayar_dimuka'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['sewa_dibayar_dimuka'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['sewa_dibayar_dimuka'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['sewa_dibayar_dimuka'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['sewa_dibayar_dimuka'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['sewa_dibayar_dimuka'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['sewa_dibayar_dimuka'] + $penyesuaian['sewa_dibayar_dimuka']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Sewa Dibayar Dimuka/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">13</th>
                                        <td>Asuransi Dibayar Dimuka</td> <!--// nama akun -->
                                        <?php if($saldo['asuransi_dibayar_dimuka'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['asuransi_dibayar_dimuka'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['asuransi_dibayar_dimuka'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['asuransi_dibayar_dimuka'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['asuransi_dibayar_dimuka'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['asuransi_dibayar_dimuka'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['asuransi_dibayar_dimuka'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['asuransi_dibayar_dimuka'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['asuransi_dibayar_dimuka'] + $penyesuaian['asuransi_dibayar_dimuka']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Asuransi Dibayar Dimuka/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">14</th>
                                        <td>PPh 25</td> <!--// nama akun -->
                                        <?php if($saldo['pph25'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph25'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph25'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pph25'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pph25'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pph25'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pph25'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pph25'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pph25'] + $penyesuaian['pph25'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph25'] + $penyesuaian['pph25'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph25'] + $penyesuaian['pph25'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pph25'] + $penyesuaian['pph25']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pph25'] + $penyesuaian['pph25'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph25'] + $penyesuaian['pph25'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph25'] + $penyesuaian['pph25'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pph25'] + $penyesuaian['pph25']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/PPh 25/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">15</th>
                                        <td>Piutang Desa</td> <!--// nama akun -->
                                        <?php if($saldo['piutang_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['piutang_desa'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['piutang_desa'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['piutang_desa'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['piutang_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['piutang_desa'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['piutang_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['piutang_desa'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['piutang_desa'] + $penyesuaian['piutang_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['piutang_desa'] + $penyesuaian['piutang_desa'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['piutang_desa'] + $penyesuaian['piutang_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['piutang_desa'] + $penyesuaian['piutang_desa']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['piutang_desa'] + $penyesuaian['piutang_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['piutang_desa'] + $penyesuaian['piutang_desa'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['piutang_desa'] + $penyesuaian['piutang_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['piutang_desa'] + $penyesuaian['piutang_desa']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Piutang Desa/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">16</th>
                                        <td>Aset Lancar Lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['asset_lancar_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['asset_lancar_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['asset_lancar_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['asset_lancar_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['asset_lancar_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['asset_lancar_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['asset_lancar_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['asset_lancar_lainnya'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['asset_lancar_lainnya'] + $penyesuaian['asset_lancar_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['asset_lancar_lainnya'] + $penyesuaian['asset_lancar_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['asset_lancar_lainnya'] + $penyesuaian['asset_lancar_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['asset_lancar_lainnya'] + $penyesuaian['asset_lancar_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['asset_lancar_lainnya'] + $penyesuaian['asset_lancar_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['asset_lancar_lainnya'] + $penyesuaian['asset_lancar_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['asset_lancar_lainnya'] + $penyesuaian['asset_lancar_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['asset_lancar_lainnya'] + $penyesuaian['asset_lancar_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Asset Lancar Lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">17</th>
                                        <td>Investasi</td> <!--// nama akun -->
                                        <?php if($saldo['Investasi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['Investasi'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['Investasi'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['Investasi'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['Investasi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['Investasi'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['Investasi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['Investasi'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['Investasi'] + $penyesuaian['Investasi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['Investasi'] + $penyesuaian['Investasi'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['Investasi'] + $penyesuaian['Investasi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['Investasi'] + $penyesuaian['Investasi']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['Investasi'] + $penyesuaian['Investasi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['Investasi'] + $penyesuaian['Investasi'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['Investasi'] + $penyesuaian['Investasi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['Investasi'] + $penyesuaian['Investasi']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Investasi/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">18</th>
                                        <td>Tanah</td> <!--// nama akun -->
                                        <?php if($saldo['Tanah'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['Tanah'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['Tanah'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['Tanah'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['Tanah'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['Tanah'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['Tanah'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['Tanah'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['Tanah'] + $penyesuaian['Tanah'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['Tanah'] + $penyesuaian['Tanah'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['Tanah'] + $penyesuaian['Tanah'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['Tanah'] + $penyesuaian['Tanah']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['Tanah'] + $penyesuaian['Tanah'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['Tanah'] + $penyesuaian['Tanah'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['Tanah'] + $penyesuaian['Tanah'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['Tanah'] + $penyesuaian['Tanah']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Tanah/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">19</th>
                                        <td>Gedung dan Bangunan</td> <!--// nama akun -->
                                        <?php if($saldo['gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['gedung_dan_bangunan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['gedung_dan_bangunan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['gedung_dan_bangunan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['gedung_dan_bangunan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['gedung_dan_bangunan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['gedung_dan_bangunan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['gedung_dan_bangunan'] + $penyesuaian['gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['gedung_dan_bangunan'] + $penyesuaian['gedung_dan_bangunan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['gedung_dan_bangunan'] + $penyesuaian['gedung_dan_bangunan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['gedung_dan_bangunan'] + $penyesuaian['gedung_dan_bangunan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['gedung_dan_bangunan'] + $penyesuaian['gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['gedung_dan_bangunan'] + $penyesuaian['gedung_dan_bangunan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['gedung_dan_bangunan'] + $penyesuaian['gedung_dan_bangunan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['gedung_dan_bangunan'] + $penyesuaian['gedung_dan_bangunan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Gedung dan Bangunan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">20</th>
                                        <td>Akumulasi Penyusutan Gedung dan Bangunan</td> <!--// nama akun -->
                                        <?php if($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_gedung_dan_bangunan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] + $penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] + $penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] + $penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] + $penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] + $penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] + $penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] + $penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['akumulasi_penyusutan_gedung_dan_bangunan'] + $penyesuaian['akumulasi_penyusutan_gedung_dan_bangunan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Akumulasi Penyusutan Gedung dan Bangunan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">21</th>
                                        <td>Peralatan dan Meubeliar</td> <!--// nama akun -->
                                        <?php if($saldo['peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['peralatan_dan_meubeliar'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['peralatan_dan_meubeliar'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['peralatan_dan_meubeliar'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['peralatan_dan_meubeliar'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['peralatan_dan_meubeliar'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['peralatan_dan_meubeliar'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['peralatan_dan_meubeliar'] + $penyesuaian['peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['peralatan_dan_meubeliar'] + $penyesuaian['peralatan_dan_meubeliar'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['peralatan_dan_meubeliar'] + $penyesuaian['peralatan_dan_meubeliar'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['peralatan_dan_meubeliar'] + $penyesuaian['peralatan_dan_meubeliar']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['peralatan_dan_meubeliar'] + $penyesuaian['peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['peralatan_dan_meubeliar'] + $penyesuaian['peralatan_dan_meubeliar'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['peralatan_dan_meubeliar'] + $penyesuaian['peralatan_dan_meubeliar'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['peralatan_dan_meubeliar'] + $penyesuaian['peralatan_dan_meubeliar']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Peralatan dan Meubeliar/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">22</th>
                                        <td>Akumulasi Penyusutan Peralatan dan Meubeliar</td> <!--// nama akun -->
                                        <?php if($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['akumulasi_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['akumulasi_penyusutan_peralatan_dan_meubeliar']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Akumulasi Penyusutan Peralatan dan Meubeliar/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">23</th>
                                        <td>Kendaraan</td> <!--// nama akun -->
                                        <?php if($saldo['kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kendaraan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kendaraan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['kendaraan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['kendaraan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['kendaraan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['kendaraan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['kendaraan'] + $penyesuaian['kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kendaraan'] + $penyesuaian['kendaraan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kendaraan'] + $penyesuaian['kendaraan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kendaraan'] + $penyesuaian['kendaraan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['kendaraan'] + $penyesuaian['kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['kendaraan'] + $penyesuaian['kendaraan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['kendaraan'] + $penyesuaian['kendaraan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['kendaraan'] + $penyesuaian['kendaraan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Kendaraan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">24</th>
                                        <td>Akumulasi Penyusutan Kendaraan</td> <!--// nama akun -->
                                        <?php if($saldo['akumulasi_penyusutan_kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_kendaraan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['akumulasi_penyusutan_kendaraan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_kendaraan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['akumulasi_penyusutan_kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['akumulasi_penyusutan_kendaraan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['akumulasi_penyusutan_kendaraan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['akumulasi_penyusutan_kendaraan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['akumulasi_penyusutan_kendaraan'] + $penyesuaian['akumulasi_penyusutan_kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_kendaraan'] + $penyesuaian['akumulasi_penyusutan_kendaraan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['akumulasi_penyusutan_kendaraan'] + $penyesuaian['akumulasi_penyusutan_kendaraan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['akumulasi_penyusutan_kendaraan'] + $penyesuaian['akumulasi_penyusutan_kendaraan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['akumulasi_penyusutan_kendaraan'] + $penyesuaian['akumulasi_penyusutan_kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['akumulasi_penyusutan_kendaraan'] + $penyesuaian['akumulasi_penyusutan_kendaraan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['akumulasi_penyusutan_kendaraan'] + $penyesuaian['akumulasi_penyusutan_kendaraan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['akumulasi_penyusutan_kendaraan'] + $penyesuaian['akumulasi_penyusutan_kendaraan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Akumulasi Penyusutan Kendaraan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">25</th>
                                        <td>Aset Tetap Lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['aset_tetap_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['aset_tetap_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['aset_tetap_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['aset_tetap_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['aset_tetap_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['aset_tetap_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['aset_tetap_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['aset_tetap_lainnya'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['aset_tetap_lainnya'] + $penyesuaian['aset_tetap_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['aset_tetap_lainnya'] + $penyesuaian['aset_tetap_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['aset_tetap_lainnya'] + $penyesuaian['aset_tetap_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['aset_tetap_lainnya'] + $penyesuaian['aset_tetap_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['aset_tetap_lainnya'] + $penyesuaian['aset_tetap_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['aset_tetap_lainnya'] + $penyesuaian['aset_tetap_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['aset_tetap_lainnya'] + $penyesuaian['aset_tetap_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['aset_tetap_lainnya'] + $penyesuaian['aset_tetap_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Aset Tetap Lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">26</th>
                                        <td>Utang Usaha</td> <!--// nama akun -->
                                        <?php if($saldo['utang_usaha'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_usaha'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_usaha'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['utang_usaha'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['utang_usaha'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_usaha'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['utang_usaha'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_usaha'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['utang_usaha'] + $penyesuaian['utang_usaha'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_usaha'] + $penyesuaian['utang_usaha'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_usaha'] + $penyesuaian['utang_usaha'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_usaha'] + $penyesuaian['utang_usaha']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['utang_usaha'] + $penyesuaian['utang_usaha'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_usaha'] + $penyesuaian['utang_usaha'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_usaha'] + $penyesuaian['utang_usaha'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_usaha'] + $penyesuaian['utang_usaha']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Utang Usaha/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">27</th>
                                        <td>PPn Keluaran</td> <!--// nama akun -->
                                        <?php if($saldo['ppn_keluaran'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['ppn_keluaran'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['ppn_keluaran'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['ppn_keluaran'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['ppn_keluaran'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['ppn_keluaran'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['ppn_keluaran'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['ppn_keluaran'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['ppn_keluaran'] + $penyesuaian['ppn_keluaran'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['ppn_keluaran'] + $penyesuaian['ppn_keluaran'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['ppn_keluaran'] + $penyesuaian['ppn_keluaran'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['ppn_keluaran'] + $penyesuaian['ppn_keluaran']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['ppn_keluaran'] + $penyesuaian['ppn_keluaran'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['ppn_keluaran'] + $penyesuaian['ppn_keluaran'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['ppn_keluaran'] + $penyesuaian['ppn_keluaran'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['ppn_keluaran'] + $penyesuaian['ppn_keluaran']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/PPn Keluaran/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">28</th>
                                        <td>PPh 21</td> <!--// nama akun -->
                                        <?php if($saldo['pph21'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph21'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph21'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pph21'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pph21'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pph21'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pph21'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pph21'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pph21'] + $penyesuaian['pph21'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph21'] + $penyesuaian['pph21'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph21'] + $penyesuaian['pph21'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pph21'] + $penyesuaian['pph21']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pph21'] + $penyesuaian['pph21'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph21'] + $penyesuaian['pph21'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph21'] + $penyesuaian['pph21'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pph21'] + $penyesuaian['pph21']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/PPh 21/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">29</th>
                                        <td>PPh 23</td> <!--// nama akun -->
                                        <?php if($saldo['pph23'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph23'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph23'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pph23'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pph23'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pph23'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pph23'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pph23'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pph23'] + $penyesuaian['pph23'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph23'] + $penyesuaian['pph23'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph23'] + $penyesuaian['pph23'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pph23'] + $penyesuaian['pph23']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pph23'] + $penyesuaian['pph23'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph23'] + $penyesuaian['pph23'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph23'] + $penyesuaian['pph23'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pph23'] + $penyesuaian['pph23']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/PPh 23/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">30</th>
                                        <td>PPh 29</td> <!--// nama akun -->
                                        <?php if($saldo['pph29'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph29'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph29'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pph29'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pph29'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pph29'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pph29'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pph29'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pph29'] + $penyesuaian['pph29'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph29'] + $penyesuaian['pph29'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph29'] + $penyesuaian['pph29'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pph29'] + $penyesuaian['pph29']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pph29'] + $penyesuaian['pph29'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pph29'] + $penyesuaian['pph29'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pph29'] + $penyesuaian['pph29'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pph29'] + $penyesuaian['pph29']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/PPh 29/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">31</th>
                                        <td>Utang Gaji dan Tunjangan</td> <!--// nama akun -->
                                        <?php if($saldo['utang_gaji_dan_tunjangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_gaji_dan_tunjangan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_gaji_dan_tunjangan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['utang_gaji_dan_tunjangan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['utang_gaji_dan_tunjangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_gaji_dan_tunjangan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['utang_gaji_dan_tunjangan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_gaji_dan_tunjangan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['utang_gaji_dan_tunjangan'] + $penyesuaian['utang_gaji_dan_tunjangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_gaji_dan_tunjangan'] + $penyesuaian['utang_gaji_dan_tunjangan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_gaji_dan_tunjangan'] + $penyesuaian['utang_gaji_dan_tunjangan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_gaji_dan_tunjangan'] + $penyesuaian['utang_gaji_dan_tunjangan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['utang_gaji_dan_tunjangan'] + $penyesuaian['utang_gaji_dan_tunjangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_gaji_dan_tunjangan'] + $penyesuaian['utang_gaji_dan_tunjangan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_gaji_dan_tunjangan'] + $penyesuaian['utang_gaji_dan_tunjangan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_gaji_dan_tunjangan'] + $penyesuaian['utang_gaji_dan_tunjangan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Utang Gaji dan Tunjangan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">32</th>
                                        <td>Utang Listrik</td> <!--// nama akun -->
                                        <?php if($saldo['utang_listrik'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_listrik'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_listrik'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['utang_listrik'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['utang_listrik'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_listrik'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['utang_listrik'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_listrik'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['utang_listrik'] + $penyesuaian['utang_listrik'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_listrik'] + $penyesuaian['utang_listrik'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_listrik'] + $penyesuaian['utang_listrik'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_listrik'] + $penyesuaian['utang_listrik']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['utang_listrik'] + $penyesuaian['utang_listrik'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_listrik'] + $penyesuaian['utang_listrik'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_listrik'] + $penyesuaian['utang_listrik'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_listrik'] + $penyesuaian['utang_listrik']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Utang Listrik/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">33</th>
                                        <td>Utang Telepon dan Internet</td> <!--// nama akun -->
                                        <?php if($saldo['utang_telepon_dan_internet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_telepon_dan_internet'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_telepon_dan_internet'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['utang_telepon_dan_internet'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['utang_telepon_dan_internet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_telepon_dan_internet'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['utang_telepon_dan_internet'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_telepon_dan_internet'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['utang_telepon_dan_internet'] + $penyesuaian['utang_telepon_dan_internet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_telepon_dan_internet'] + $penyesuaian['utang_telepon_dan_internet'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_telepon_dan_internet'] + $penyesuaian['utang_telepon_dan_internet'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_telepon_dan_internet'] + $penyesuaian['utang_telepon_dan_internet']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['utang_telepon_dan_internet'] + $penyesuaian['utang_telepon_dan_internet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_telepon_dan_internet'] + $penyesuaian['utang_telepon_dan_internet'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_telepon_dan_internet'] + $penyesuaian['utang_telepon_dan_internet'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_telepon_dan_internet'] + $penyesuaian['utang_telepon_dan_internet']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Utang Telepon dan Internet/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">34</th>
                                        <td>Utang Utilitas Lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['utang_ultilitas_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_ultilitas_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_ultilitas_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['utang_ultilitas_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['utang_ultilitas_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_ultilitas_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['utang_ultilitas_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_ultilitas_lainnya'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['utang_ultilitas_lainnya'] + $penyesuaian['utang_ultilitas_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_ultilitas_lainnya'] + $penyesuaian['utang_ultilitas_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_ultilitas_lainnya'] + $penyesuaian['utang_ultilitas_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_ultilitas_lainnya'] + $penyesuaian['utang_ultilitas_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['utang_ultilitas_lainnya'] + $penyesuaian['utang_ultilitas_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_ultilitas_lainnya'] + $penyesuaian['utang_ultilitas_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_ultilitas_lainnya'] + $penyesuaian['utang_ultilitas_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_ultilitas_lainnya'] + $penyesuaian['utang_ultilitas_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Utang Utilitas Lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">35</th>
                                        <td>Utang Jangka Pendek Lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['utang_jangka_pendek_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_jangka_pendek_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_jangka_pendek_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['utang_jangka_pendek_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['utang_jangka_pendek_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_jangka_pendek_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['utang_jangka_pendek_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_jangka_pendek_lainnya'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['utang_jangka_pendek_lainnya'] + $penyesuaian['utang_jangka_pendek_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_jangka_pendek_lainnya'] + $penyesuaian['utang_jangka_pendek_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_jangka_pendek_lainnya'] + $penyesuaian['utang_jangka_pendek_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_jangka_pendek_lainnya'] + $penyesuaian['utang_jangka_pendek_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['utang_jangka_pendek_lainnya'] + $penyesuaian['utang_jangka_pendek_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_jangka_pendek_lainnya'] + $penyesuaian['utang_jangka_pendek_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_jangka_pendek_lainnya'] + $penyesuaian['utang_jangka_pendek_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_jangka_pendek_lainnya'] + $penyesuaian['utang_jangka_pendek_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Utang Jangka Pendek Lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">36</th>
                                        <td>Utang ke Bank</td> <!--// nama akun -->
                                        <?php if($saldo['utang_ke_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_ke_bank'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_ke_bank'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['utang_ke_bank'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['utang_ke_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_ke_bank'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['utang_ke_bank'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_ke_bank'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['utang_ke_bank'] + $penyesuaian['utang_ke_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_ke_bank'] + $penyesuaian['utang_ke_bank'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_ke_bank'] + $penyesuaian['utang_ke_bank'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_ke_bank'] + $penyesuaian['utang_ke_bank']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['utang_ke_bank'] + $penyesuaian['utang_ke_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_ke_bank'] + $penyesuaian['utang_ke_bank'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_ke_bank'] + $penyesuaian['utang_ke_bank'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_ke_bank'] + $penyesuaian['utang_ke_bank']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Utang Ke Bank/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">37</th>
                                        <td>Utang Jangka Panjang Lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['utang_jangka_panjang_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_jangka_panjang_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_jangka_panjang_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['utang_jangka_panjang_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['utang_jangka_panjang_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_jangka_panjang_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['utang_jangka_panjang_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['utang_jangka_panjang_lainnya'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['utang_jangka_panjang_lainnya'] + $penyesuaian['utang_jangka_panjang_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_jangka_panjang_lainnya'] + $penyesuaian['utang_jangka_panjang_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_jangka_panjang_lainnya'] + $penyesuaian['utang_jangka_panjang_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_jangka_panjang_lainnya'] + $penyesuaian['utang_jangka_panjang_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['utang_jangka_panjang_lainnya'] + $penyesuaian['utang_jangka_panjang_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['utang_jangka_panjang_lainnya'] + $penyesuaian['utang_jangka_panjang_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['utang_jangka_panjang_lainnya'] + $penyesuaian['utang_jangka_panjang_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['utang_jangka_panjang_lainnya'] + $penyesuaian['utang_jangka_panjang_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Utang Jangka Panjang Lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">38</th>
                                        <td>Penyertaan Modal Desa</td> <!--// nama akun -->
                                        <?php if($saldo['penyertaan_modal_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['penyertaan_modal_desa'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['penyertaan_modal_desa'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['penyertaan_modal_desa'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['penyertaan_modal_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['penyertaan_modal_desa'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['penyertaan_modal_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['penyertaan_modal_desa'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['penyertaan_modal_desa'] + $penyesuaian['penyertaan_modal_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['penyertaan_modal_desa'] + $penyesuaian['penyertaan_modal_desa'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['penyertaan_modal_desa'] + $penyesuaian['penyertaan_modal_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['penyertaan_modal_desa'] + $penyesuaian['penyertaan_modal_desa']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['penyertaan_modal_desa'] + $penyesuaian['penyertaan_modal_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['penyertaan_modal_desa'] + $penyesuaian['penyertaan_modal_desa'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['penyertaan_modal_desa'] + $penyesuaian['penyertaan_modal_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['penyertaan_modal_desa'] + $penyesuaian['penyertaan_modal_desa']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Penyertaan Modal Desa/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">39</th>
                                        <td>Penyertaan Modal Masyarakat</td> <!--// nama akun -->
                                        <?php if($saldo['penyertaan_modal_masyarakat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['penyertaan_modal_masyarakat'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['penyertaan_modal_masyarakat'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['penyertaan_modal_masyarakat'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['penyertaan_modal_masyarakat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['penyertaan_modal_masyarakat'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['penyertaan_modal_masyarakat'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['penyertaan_modal_masyarakat'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['penyertaan_modal_masyarakat'] + $penyesuaian['penyertaan_modal_masyarakat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['penyertaan_modal_masyarakat'] + $penyesuaian['penyertaan_modal_masyarakat'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['penyertaan_modal_masyarakat'] + $penyesuaian['penyertaan_modal_masyarakat'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['penyertaan_modal_masyarakat'] + $penyesuaian['penyertaan_modal_masyarakat']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['penyertaan_modal_masyarakat'] + $penyesuaian['penyertaan_modal_masyarakat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['penyertaan_modal_masyarakat'] + $penyesuaian['penyertaan_modal_masyarakat'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['penyertaan_modal_masyarakat'] + $penyesuaian['penyertaan_modal_masyarakat'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['penyertaan_modal_masyarakat'] + $penyesuaian['penyertaan_modal_masyarakat']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Penyertaan Modal Masyarakat/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">40</th>
                                        <td>Bagi Hasil Penyertaan Modal Desa</td> <!--// nama akun -->
                                        <?php if($saldo['bagi_hasil_penyertaan_modal_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['bagi_hasil_penyertaan_modal_desa'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['bagi_hasil_penyertaan_modal_desa'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['bagi_hasil_penyertaan_modal_desa'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['bagi_hasil_penyertaan_modal_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['bagi_hasil_penyertaan_modal_desa'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['bagi_hasil_penyertaan_modal_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['bagi_hasil_penyertaan_modal_desa'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['bagi_hasil_penyertaan_modal_desa'] + $penyesuaian['bagi_hasil_penyertaan_modal_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['bagi_hasil_penyertaan_modal_desa'] + $penyesuaian['bagi_hasil_penyertaan_modal_desa'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['bagi_hasil_penyertaan_modal_desa'] + $penyesuaian['bagi_hasil_penyertaan_modal_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['bagi_hasil_penyertaan_modal_desa'] + $penyesuaian['bagi_hasil_penyertaan_modal_desa']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['bagi_hasil_penyertaan_modal_desa'] + $penyesuaian['bagi_hasil_penyertaan_modal_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['bagi_hasil_penyertaan_modal_desa'] + $penyesuaian['bagi_hasil_penyertaan_modal_desa'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['bagi_hasil_penyertaan_modal_desa'] + $penyesuaian['bagi_hasil_penyertaan_modal_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['bagi_hasil_penyertaan_modal_desa'] + $penyesuaian['bagi_hasil_penyertaan_modal_desa']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Bagi Hasil Penyertaan Modal Desa/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">41</th>
                                        <td>Bagi Hasil Penyertaan Modal Masyarakat</td> <!--// nama akun -->
                                        <?php if($saldo['bagi_hasil_penyertaan_modal_masyarakat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['bagi_hasil_penyertaan_modal_masyarakat'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['bagi_hasil_penyertaan_modal_masyarakat'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['bagi_hasil_penyertaan_modal_masyarakat'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['bagi_hasil_penyertaan_modal_masyarakat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['bagi_hasil_penyertaan_modal_masyarakat'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['bagi_hasil_penyertaan_modal_masyarakat'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['bagi_hasil_penyertaan_modal_masyarakat'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['bagi_hasil_penyertaan_modal_masyarakat'] + $penyesuaian['bagi_hasil_penyertaan_modal_masyarakat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['bagi_hasil_penyertaan_modal_masyarakat'] + $penyesuaian['bagi_hasil_penyertaan_modal_masyarakat'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['bagi_hasil_penyertaan_modal_masyarakat'] + $penyesuaian['bagi_hasil_penyertaan_modal_masyarakat'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['bagi_hasil_penyertaan_modal_masyarakat'] + $penyesuaian['bagi_hasil_penyertaan_modal_masyarakat']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['bagi_hasil_penyertaan_modal_masyarakat'] + $penyesuaian['bagi_hasil_penyertaan_modal_masyarakat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['bagi_hasil_penyertaan_modal_masyarakat'] + $penyesuaian['bagi_hasil_penyertaan_modal_masyarakat'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['bagi_hasil_penyertaan_modal_masyarakat'] + $penyesuaian['bagi_hasil_penyertaan_modal_masyarakat'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['bagi_hasil_penyertaan_modal_masyarakat'] + $penyesuaian['bagi_hasil_penyertaan_modal_masyarakat']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Bagi Hasil Penyertaan Modal Masyarakat/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">42</th>
                                        <td>Pendapatan Tiket Masuk Perseorangan</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_tiket_masuk_perseorangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_masuk_perseorangan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_tiket_masuk_perseorangan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_masuk_perseorangan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_tiket_masuk_perseorangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_tiket_masuk_perseorangan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_tiket_masuk_perseorangan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_tiket_masuk_perseorangan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_tiket_masuk_perseorangan'] + $penyesuaian['pendapatan_tiket_masuk_perseorangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_masuk_perseorangan'] + $penyesuaian['pendapatan_tiket_masuk_perseorangan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_tiket_masuk_perseorangan'] + $penyesuaian['pendapatan_tiket_masuk_perseorangan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_tiket_masuk_perseorangan'] + $penyesuaian['pendapatan_tiket_masuk_perseorangan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_tiket_masuk_perseorangan'] + $penyesuaian['pendapatan_tiket_masuk_perseorangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_masuk_perseorangan'] + $penyesuaian['pendapatan_tiket_masuk_perseorangan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_tiket_masuk_perseorangan'] + $penyesuaian['pendapatan_tiket_masuk_perseorangan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_tiket_masuk_perseorangan'] + $penyesuaian['pendapatan_tiket_masuk_perseorangan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Tiket Masuk Perseorangan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">43</th>
                                        <td>Pendapatan Tiket Masuk Rombongan</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_tiket_masuk_rombongan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_masuk_rombongan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_tiket_masuk_rombongan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_masuk_rombongan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_tiket_masuk_rombongan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_tiket_masuk_rombongan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_tiket_masuk_rombongan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_tiket_masuk_rombongan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_tiket_masuk_rombongan'] + $penyesuaian['pendapatan_tiket_masuk_rombongan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_masuk_rombongan'] + $penyesuaian['pendapatan_tiket_masuk_rombongan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_tiket_masuk_rombongan'] + $penyesuaian['pendapatan_tiket_masuk_rombongan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_tiket_masuk_rombongan'] + $penyesuaian['pendapatan_tiket_masuk_rombongan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_tiket_masuk_rombongan'] + $penyesuaian['pendapatan_tiket_masuk_rombongan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_masuk_rombongan'] + $penyesuaian['pendapatan_tiket_masuk_rombongan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_tiket_masuk_rombongan'] + $penyesuaian['pendapatan_tiket_masuk_rombongan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_tiket_masuk_rombongan'] + $penyesuaian['pendapatan_tiket_masuk_rombongan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Tiket Masuk Rombongan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">44</th>
                                        <td>Pendapatan Tiket Lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_tiket_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_tiket_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_tiket_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_tiket_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_tiket_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_tiket_lainnya'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_tiket_lainnya'] + $penyesuaian['pendapatan_tiket_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_lainnya'] + $penyesuaian['pendapatan_tiket_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_tiket_lainnya'] + $penyesuaian['pendapatan_tiket_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_tiket_lainnya'] + $penyesuaian['pendapatan_tiket_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_tiket_lainnya'] + $penyesuaian['pendapatan_tiket_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_tiket_lainnya'] + $penyesuaian['pendapatan_tiket_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_tiket_lainnya'] + $penyesuaian['pendapatan_tiket_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_tiket_lainnya'] + $penyesuaian['pendapatan_tiket_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Tiket Lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">45</th>
                                        <td>Pendapatan Komisi</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_komisi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_komisi'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_komisi'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_komisi'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_komisi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_komisi'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_komisi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_komisi'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_komisi'] + $penyesuaian['pendapatan_komisi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_komisi'] + $penyesuaian['pendapatan_komisi'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_komisi'] + $penyesuaian['pendapatan_komisi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_komisi'] + $penyesuaian['pendapatan_komisi']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_komisi'] + $penyesuaian['pendapatan_komisi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_komisi'] + $penyesuaian['pendapatan_komisi'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_komisi'] + $penyesuaian['pendapatan_komisi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_komisi'] + $penyesuaian['pendapatan_komisi']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Komisi/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">46</th>
                                        <td>Pendapatan Parkir</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_parkir'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_parkir'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_parkir'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_parkir'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_parkir'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_parkir'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_parkir'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_parkir'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_parkir'] + $penyesuaian['pendapatan_parkir'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_parkir'] + $penyesuaian['pendapatan_parkir'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_parkir'] + $penyesuaian['pendapatan_parkir'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_parkir'] + $penyesuaian['pendapatan_parkir']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_parkir'] + $penyesuaian['pendapatan_parkir'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_parkir'] + $penyesuaian['pendapatan_parkir'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_parkir'] + $penyesuaian['pendapatan_parkir'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_parkir'] + $penyesuaian['pendapatan_parkir']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Parkir/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">47</th>
                                        <td>Pendapatan Toilet</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_toilet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_toilet'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_toilet'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_toilet'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_toilet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_toilet'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_toilet'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_toilet'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_toilet'] + $penyesuaian['pendapatan_toilet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_toilet'] + $penyesuaian['pendapatan_toilet'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_toilet'] + $penyesuaian['pendapatan_toilet'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_toilet'] + $penyesuaian['pendapatan_toilet']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_toilet'] + $penyesuaian['pendapatan_toilet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_toilet'] + $penyesuaian['pendapatan_toilet'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_toilet'] + $penyesuaian['pendapatan_toilet'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_toilet'] + $penyesuaian['pendapatan_toilet']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Toilet/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">48</th>
                                        <td>Pendapatan Jasa</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_jasa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_jasa'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_jasa'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_jasa'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_jasa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_jasa'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_jasa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_jasa'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_jasa'] + $penyesuaian['pendapatan_jasa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_jasa'] + $penyesuaian['pendapatan_jasa'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_jasa'] + $penyesuaian['pendapatan_jasa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_jasa'] + $penyesuaian['pendapatan_jasa']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_jasa'] + $penyesuaian['pendapatan_jasa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_jasa'] + $penyesuaian['pendapatan_jasa'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_jasa'] + $penyesuaian['pendapatan_jasa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_jasa'] + $penyesuaian['pendapatan_jasa']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Jasa/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">49</th>
                                        <td>Pendapatan Sewa</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_sewa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_sewa'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_sewa'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_sewa'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_sewa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_sewa'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_sewa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_sewa'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_sewa'] + $penyesuaian['pendapatan_sewa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_sewa'] + $penyesuaian['pendapatan_sewa'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_sewa'] + $penyesuaian['pendapatan_sewa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_sewa'] + $penyesuaian['pendapatan_sewa']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_sewa'] + $penyesuaian['pendapatan_sewa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_sewa'] + $penyesuaian['pendapatan_sewa'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_sewa'] + $penyesuaian['pendapatan_sewa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_sewa'] + $penyesuaian['pendapatan_sewa']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Sewa/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">50</th>
                                        <td>Pendapatan Rupa Rupa Lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_rupa_rupa_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_rupa_rupa_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_rupa_rupa_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_rupa_rupa_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_rupa_rupa_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_rupa_rupa_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_rupa_rupa_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_rupa_rupa_lainnya'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_rupa_rupa_lainnya'] + $penyesuaian['pendapatan_rupa_rupa_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_rupa_rupa_lainnya'] + $penyesuaian['pendapatan_rupa_rupa_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_rupa_rupa_lainnya'] + $penyesuaian['pendapatan_rupa_rupa_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_rupa_rupa_lainnya'] + $penyesuaian['pendapatan_rupa_rupa_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_rupa_rupa_lainnya'] + $penyesuaian['pendapatan_rupa_rupa_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_rupa_rupa_lainnya'] + $penyesuaian['pendapatan_rupa_rupa_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_rupa_rupa_lainnya'] + $penyesuaian['pendapatan_rupa_rupa_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_rupa_rupa_lainnya'] + $penyesuaian['pendapatan_rupa_rupa_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Rupa-rupa Lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">51</th>
                                        <td>Pendapatan Bunga</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_bunga'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_bunga'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_bunga'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_bunga'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_bunga'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_bunga'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_bunga'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_bunga'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_bunga'] + $penyesuaian['pendapatan_bunga'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_bunga'] + $penyesuaian['pendapatan_bunga'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_bunga'] + $penyesuaian['pendapatan_bunga'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_bunga'] + $penyesuaian['pendapatan_bunga']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_bunga'] + $penyesuaian['pendapatan_bunga'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_bunga'] + $penyesuaian['pendapatan_bunga'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_bunga'] + $penyesuaian['pendapatan_bunga'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_bunga'] + $penyesuaian['pendapatan_bunga']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Bunga/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">52</th>
                                        <td>Pendapatan dari Desa</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_dari_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_dari_desa'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_dari_desa'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_dari_desa'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_dari_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_dari_desa'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_dari_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_dari_desa'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_dari_desa'] + $penyesuaian['pendapatan_dari_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_dari_desa'] + $penyesuaian['pendapatan_dari_desa'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_dari_desa'] + $penyesuaian['pendapatan_dari_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_dari_desa'] + $penyesuaian['pendapatan_dari_desa']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_dari_desa'] + $penyesuaian['pendapatan_dari_desa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_dari_desa'] + $penyesuaian['pendapatan_dari_desa'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_dari_desa'] + $penyesuaian['pendapatan_dari_desa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_dari_desa'] + $penyesuaian['pendapatan_dari_desa']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan dari Desa/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">53</th>
                                        <td>Pendapatan Bantuan/Sumbangan/Hibah</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_bantuan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_bantuan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_bantuan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_bantuan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_bantuan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_bantuan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_bantuan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_bantuan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_bantuan'] + $penyesuaian['pendapatan_bantuan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_bantuan'] + $penyesuaian['pendapatan_bantuan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_bantuan'] + $penyesuaian['pendapatan_bantuan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_bantuan'] + $penyesuaian['pendapatan_bantuan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_bantuan'] + $penyesuaian['pendapatan_bantuan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_bantuan'] + $penyesuaian['pendapatan_bantuan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_bantuan'] + $penyesuaian['pendapatan_bantuan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_bantuan'] + $penyesuaian['pendapatan_bantuan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Bantuan/Sumbangan/Hibah/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">54</th>
                                        <td>Pendapatan Lain-lain</td> <!--// nama akun -->
                                        <?php if($saldo['pendapatan_lain_lain'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_lain_lain'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_lain_lain'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_lain_lain'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['pendapatan_lain_lain'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_lain_lain'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['pendapatan_lain_lain'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['pendapatan_lain_lain'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['pendapatan_lain_lain'] + $penyesuaian['pendapatan_lain_lain'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_lain_lain'] + $penyesuaian['pendapatan_lain_lain'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_lain_lain'] + $penyesuaian['pendapatan_lain_lain'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_lain_lain'] + $penyesuaian['pendapatan_lain_lain']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['pendapatan_lain_lain'] + $penyesuaian['pendapatan_lain_lain'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['pendapatan_lain_lain'] + $penyesuaian['pendapatan_lain_lain'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['pendapatan_lain_lain'] + $penyesuaian['pendapatan_lain_lain'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['pendapatan_lain_lain'] + $penyesuaian['pendapatan_lain_lain']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Pendapatan Lain-lain/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">55</th>
                                        <td>Beban Gaji dan Tunjangan</td> <!--// nama akun -->
                                        <?php if($saldo['beban_gaji_dan_tunjangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_gaji_dan_tunjangan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_gaji_dan_tunjangan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_gaji_dan_tunjangan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_gaji_dan_tunjangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_gaji_dan_tunjangan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_gaji_dan_tunjangan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_gaji_dan_tunjangan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_gaji_dan_tunjangan'] + $penyesuaian['beban_gaji_dan_tunjangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_gaji_dan_tunjangan'] + $penyesuaian['beban_gaji_dan_tunjangan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_gaji_dan_tunjangan'] + $penyesuaian['beban_gaji_dan_tunjangan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_gaji_dan_tunjangan'] + $penyesuaian['beban_gaji_dan_tunjangan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_gaji_dan_tunjangan'] + $penyesuaian['beban_gaji_dan_tunjangan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_gaji_dan_tunjangan'] + $penyesuaian['beban_gaji_dan_tunjangan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_gaji_dan_tunjangan'] + $penyesuaian['beban_gaji_dan_tunjangan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_gaji_dan_tunjangan'] + $penyesuaian['beban_gaji_dan_tunjangan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Gaji dan Tunjangan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">56</th>
                                        <td>Beban Honor Lembur</td> <!--// nama akun -->
                                        <?php if($saldo['beban_honor_lembur'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_honor_lembur'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_honor_lembur'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_honor_lembur'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_honor_lembur'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_honor_lembur'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_honor_lembur'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_honor_lembur'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_honor_lembur'] + $penyesuaian['beban_honor_lembur'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_honor_lembur'] + $penyesuaian['beban_honor_lembur'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_honor_lembur'] + $penyesuaian['beban_honor_lembur'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_honor_lembur'] + $penyesuaian['beban_honor_lembur']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_honor_lembur'] + $penyesuaian['beban_honor_lembur'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_honor_lembur'] + $penyesuaian['beban_honor_lembur'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_honor_lembur'] + $penyesuaian['beban_honor_lembur'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_honor_lembur'] + $penyesuaian['beban_honor_lembur']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Honor Lembur/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">57</th>
                                        <td>Beban Honor Narasumber</td> <!--// nama akun -->
                                        <?php if($saldo['beban_honor_narasumber'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_honor_narasumber'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_honor_narasumber'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_honor_narasumber'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_honor_narasumber'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_honor_narasumber'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_honor_narasumber'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_honor_narasumber'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_honor_narasumber'] + $penyesuaian['beban_honor_narasumber'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_honor_narasumber'] + $penyesuaian['beban_honor_narasumber'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_honor_narasumber'] + $penyesuaian['beban_honor_narasumber'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_honor_narasumber'] + $penyesuaian['beban_honor_narasumber']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_honor_narasumber'] + $penyesuaian['beban_honor_narasumber'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_honor_narasumber'] + $penyesuaian['beban_honor_narasumber'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_honor_narasumber'] + $penyesuaian['beban_honor_narasumber'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_honor_narasumber'] + $penyesuaian['beban_honor_narasumber']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Honor Narasumber/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">58</th>
                                        <td>Beban Insentif (Bonus)</td> <!--// nama akun -->
                                        <?php if($saldo['beban_insentif_bonus'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_insentif_bonus'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_insentif_bonus'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_insentif_bonus'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_insentif_bonus'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_insentif_bonus'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_insentif_bonus'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_insentif_bonus'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_insentif_bonus'] + $penyesuaian['beban_insentif_bonus'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_insentif_bonus'] + $penyesuaian['beban_insentif_bonus'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_insentif_bonus'] + $penyesuaian['beban_insentif_bonus'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_insentif_bonus'] + $penyesuaian['beban_insentif_bonus']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_insentif_bonus'] + $penyesuaian['beban_insentif_bonus'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_insentif_bonus'] + $penyesuaian['beban_insentif_bonus'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_insentif_bonus'] + $penyesuaian['beban_insentif_bonus'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_insentif_bonus'] + $penyesuaian['beban_insentif_bonus']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Insentif (Bonus)/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">59</th>
                                        <td>Beban Komisi</td> <!--// nama akun -->
                                        <?php if($saldo['beban_komisi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_komisi'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_komisi'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_komisi'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_komisi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_komisi'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_komisi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_komisi'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_komisi'] + $penyesuaian['beban_komisi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_komisi'] + $penyesuaian['beban_komisi'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_komisi'] + $penyesuaian['beban_komisi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_komisi'] + $penyesuaian['beban_komisi']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_komisi'] + $penyesuaian['beban_komisi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_komisi'] + $penyesuaian['beban_komisi'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_komisi'] + $penyesuaian['beban_komisi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_komisi'] + $penyesuaian['beban_komisi']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Komisi/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">60</th>
                                        <td>Beban Seragam Pegawai</td> <!--// nama akun -->
                                        <?php if($saldo['beban_seragam_pegawai'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_seragam_pegawai'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_seragam_pegawai'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_seragam_pegawai'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_seragam_pegawai'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_seragam_pegawai'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_seragam_pegawai'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_seragam_pegawai'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_seragam_pegawai'] + $penyesuaian['beban_seragam_pegawai'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_seragam_pegawai'] + $penyesuaian['beban_seragam_pegawai'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_seragam_pegawai'] + $penyesuaian['beban_seragam_pegawai'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_seragam_pegawai'] + $penyesuaian['beban_seragam_pegawai']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_seragam_pegawai'] + $penyesuaian['beban_seragam_pegawai'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_seragam_pegawai'] + $penyesuaian['beban_seragam_pegawai'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_seragam_pegawai'] + $penyesuaian['beban_seragam_pegawai'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_seragam_pegawai'] + $penyesuaian['beban_seragam_pegawai']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Seragam Pegawai/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">61</th>
                                        <td>Beban Listrik</td> <!--// nama akun -->
                                        <?php if($saldo['beban_listrik'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_listrik'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_listrik'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_listrik'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_listrik'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_listrik'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_listrik'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_listrik'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_listrik'] + $penyesuaian['beban_listrik'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_listrik'] + $penyesuaian['beban_listrik'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_listrik'] + $penyesuaian['beban_listrik'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_listrik'] + $penyesuaian['beban_listrik']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_listrik'] + $penyesuaian['beban_listrik'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_listrik'] + $penyesuaian['beban_listrik'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_listrik'] + $penyesuaian['beban_listrik'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_listrik'] + $penyesuaian['beban_listrik']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Listrik/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">62</th>
                                        <td>Beban Telepon dan Internet</td> <!--// nama akun -->
                                        <?php if($saldo['beban_telepon_dan_internet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_telepon_dan_internet'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_telepon_dan_internet'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_telepon_dan_internet'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_telepon_dan_internet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_telepon_dan_internet'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_telepon_dan_internet'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_telepon_dan_internet'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_telepon_dan_internet'] + $penyesuaian['beban_telepon_dan_internet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_telepon_dan_internet'] + $penyesuaian['beban_telepon_dan_internet'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_telepon_dan_internet'] + $penyesuaian['beban_telepon_dan_internet'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_telepon_dan_internet'] + $penyesuaian['beban_telepon_dan_internet']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_telepon_dan_internet'] + $penyesuaian['beban_telepon_dan_internet'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_telepon_dan_internet'] + $penyesuaian['beban_telepon_dan_internet'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_telepon_dan_internet'] + $penyesuaian['beban_telepon_dan_internet'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_telepon_dan_internet'] + $penyesuaian['beban_telepon_dan_internet']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Telepon dan Internet/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">63</th>
                                        <td>Beban Air</td> <!--// nama akun -->
                                        <?php if($saldo['beban_air'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_air'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_air'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_air'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_air'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_air'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_air'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_air'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_air'] + $penyesuaian['beban_air'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_air'] + $penyesuaian['beban_air'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_air'] + $penyesuaian['beban_air'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_air'] + $penyesuaian['beban_air']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_air'] + $penyesuaian['beban_air'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_air'] + $penyesuaian['beban_air'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_air'] + $penyesuaian['beban_air'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_air'] + $penyesuaian['beban_air']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Air/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">64</th>
                                        <td>Beban Utilitas Lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['beban_ultilitas_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_ultilitas_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_ultilitas_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_ultilitas_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_ultilitas_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_ultilitas_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_ultilitas_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_ultilitas_lainnya'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_ultilitas_lainnya'] + $penyesuaian['beban_ultilitas_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_ultilitas_lainnya'] + $penyesuaian['beban_ultilitas_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_ultilitas_lainnya'] + $penyesuaian['beban_ultilitas_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_ultilitas_lainnya'] + $penyesuaian['beban_ultilitas_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_ultilitas_lainnya'] + $penyesuaian['beban_ultilitas_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_ultilitas_lainnya'] + $penyesuaian['beban_ultilitas_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_ultilitas_lainnya'] + $penyesuaian['beban_ultilitas_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_ultilitas_lainnya'] + $penyesuaian['beban_ultilitas_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Utilitas Lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">65</th>
                                        <td>Beban Transportasi</td> <!--// nama akun -->
                                        <?php if($saldo['beban_transportasi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_transportasi'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_transportasi'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_transportasi'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_transportasi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_transportasi'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_transportasi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_transportasi'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_transportasi'] + $penyesuaian['beban_transportasi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_transportasi'] + $penyesuaian['beban_transportasi'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_beban_transportasiair'] + $penyesuaian['beban_transportasi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_transportasi'] + $penyesuaian['bebbeban_transportasian_air']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_transportasi'] + $penyesuaian['beban_transportasi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_transportasi'] + $penyesuaian['beban_transportasi'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_transportasi'] + $penyesuaian['beban_transportasi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_transportasi'] + $penyesuaian['beban_transportasi']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Transportasi/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">66</th>
                                        <td>Beban Parkir</td> <!--// nama akun -->
                                        <?php if($saldo['beban_parkir'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_parkir'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_parkir'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_parkir'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_parkir'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_parkir'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_parkir'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_parkir'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_parkir'] + $penyesuaian['beban_parkir'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_parkir'] + $penyesuaian['beban_parkir'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_parkir'] + $penyesuaian['beban_parkir'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_parkir'] + $penyesuaian['beban_parkir']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_parkir'] + $penyesuaian['beban_parkir'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_parkir'] + $penyesuaian['beban_parkir'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_parkir'] + $penyesuaian['beban_parkir'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_parkir'] + $penyesuaian['beban_parkir']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Parkir/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">67</th>
                                        <td>Beban Administrasi Bank</td> <!--// nama akun -->
                                        <?php if($saldo['beban_administrasi_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_administrasi_bank'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_administrasi_bank'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_administrasi_bank'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_administrasi_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_administrasi_bank'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_administrasi_bank'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_administrasi_bank'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_administrasi_bank'] + $penyesuaian['beban_administrasi_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_administrasi_bank'] + $penyesuaian['beban_administrasi_bank'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_administrasi_bank'] + $penyesuaian['beban_administrasi_bank'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_administrasi_bank'] + $penyesuaian['beban_administrasi_bank']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_administrasi_bank'] + $penyesuaian['beban_administrasi_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_administrasi_bank'] + $penyesuaian['beban_administrasi_bank'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_administrasi_bank'] + $penyesuaian['beban_administrasi_bank'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_administrasi_bank'] + $penyesuaian['beban_administrasi_bank']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Administrasi Bank/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">68</th>
                                        <td>Beban Keamanan</td> <!--// nama akun -->
                                        <?php if($saldo['beban_keamanan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_keamanan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_keamanan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_keamanan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_keamanan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_keamanan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_keamanan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_keamanan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_keamanan'] + $penyesuaian['beban_keamanan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_keamanan'] + $penyesuaian['beban_keamanan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_keamanan'] + $penyesuaian['beban_keamanan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_keamanan'] + $penyesuaian['beban_keamanan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_keamanan'] + $penyesuaian['beban_keamanan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_keamanan'] + $penyesuaian['beban_keamanan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_keamanan'] + $penyesuaian['beban_keamanan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_keamanan'] + $penyesuaian['beban_keamanan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Keamanan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">69</th>
                                        <td>Beban Kebersihan</td> <!--// nama akun -->
                                        <?php if($saldo['beban_kebersihan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_kebersihan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_kebersihan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_kebersihan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_kebersihan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_kebersihan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_kebersihan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_kebersihan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_kebersihan'] + $penyesuaian['beban_kebersihan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_kebersihan'] + $penyesuaian['beban_kebersihan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_kebersihan'] + $penyesuaian['beban_kebersihan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_kebersihan'] + $penyesuaian['beban_kebersihan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_kebersihan'] + $penyesuaian['beban_kebersihan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_kebersihan'] + $penyesuaian['beban_kebersihan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_kebersihan'] + $penyesuaian['beban_kebersihan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_kebersihan'] + $penyesuaian['beban_kebersihan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Kebersihan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">70</th>
                                        <td>Beban ATK</td> <!--// nama akun -->
                                        <?php if($saldo['beban_atk'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_atk'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_atk'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_atk'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_atk'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_atk'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_atk'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_atk'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_atk'] + $penyesuaian['beban_atk'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_atk'] + $penyesuaian['beban_atk'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_atk'] + $penyesuaian['beban_atk'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_atk'] + $penyesuaian['beban_atk']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_atk'] + $penyesuaian['beban_atk'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_atk'] + $penyesuaian['beban_atk'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_atk'] + $penyesuaian['beban_atk'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_atk'] + $penyesuaian['beban_atk']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban ATK/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">71</th>
                                        <td>Beban Perlengkapan Lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['beban_perlengkapan_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_perlengkapan_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_perlengkapan_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_perlengkapan_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_perlengkapan_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_perlengkapan_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_perlengkapan_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_perlengkapan_lainnya'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_perlengkapan_lainnya'] + $penyesuaian['beban_perlengkapan_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_perlengkapan_lainnya'] + $penyesuaian['beban_perlengkapan_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_perlengkapan_lainnya'] + $penyesuaian['beban_perlengkapan_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_perlengkapan_lainnya'] + $penyesuaian['beban_perlengkapan_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_perlengkapan_lainnya'] + $penyesuaian['beban_perlengkapan_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_perlengkapan_lainnya'] + $penyesuaian['beban_perlengkapan_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_perlengkapan_lainnya'] + $penyesuaian['beban_perlengkapan_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_perlengkapan_lainnya'] + $penyesuaian['beban_perlengkapan_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Perlengkapan Lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">72</th>
                                        <td>Beban Fotocopy</td> <!--// nama akun -->
                                        <?php if($saldo['beban_fotocopy'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_fotocopy'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_fotocopy'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_fotocopy'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_fotocopy'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_fotocopy'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_fotocopy'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_fotocopy'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_fotocopy'] + $penyesuaian['beban_fotocopy'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_fotocopy'] + $penyesuaian['beban_fotocopy'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_fotocopy'] + $penyesuaian['beban_fotocopy'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_fotocopy'] + $penyesuaian['beban_fotocopy']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_fotocopy'] + $penyesuaian['beban_fotocopy'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_fotocopy'] + $penyesuaian['beban_fotocopy'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_fotocopy'] + $penyesuaian['beban_fotocopy'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_fotocopy'] + $penyesuaian['beban_fotocopy']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Fotocopy/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">73</th>
                                        <td>Beban Pemeliharaan dan Perbaikan</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pemeliharaan_dan_perbaikan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pemeliharaan_dan_perbaikan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pemeliharaan_dan_perbaikan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pemeliharaan_dan_perbaikan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pemeliharaan_dan_perbaikan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pemeliharaan_dan_perbaikan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pemeliharaan_dan_perbaikan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pemeliharaan_dan_perbaikan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pemeliharaan_dan_perbaikan'] + $penyesuaian['beban_pemeliharaan_dan_perbaikan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pemeliharaan_dan_perbaikan'] + $penyesuaian['beban_pemeliharaan_dan_perbaikan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pemeliharaan_dan_perbaikan'] + $penyesuaian['beban_pemeliharaan_dan_perbaikan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pemeliharaan_dan_perbaikan'] + $penyesuaian['beban_pemeliharaan_dan_perbaikan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pemeliharaan_dan_perbaikan'] + $penyesuaian['beban_pemeliharaan_dan_perbaikan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pemeliharaan_dan_perbaikan'] + $penyesuaian['beban_pemeliharaan_dan_perbaikan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pemeliharaan_dan_perbaikan'] + $penyesuaian['beban_pemeliharaan_dan_perbaikan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pemeliharaan_dan_perbaikan'] + $penyesuaian['beban_pemeliharaan_dan_perbaikan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Pemeliharaan dan Perbaikan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">74</th>
                                        <td>Beban Sewa</td> <!--// nama akun -->
                                        <?php if($saldo['beban_sewa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_sewa'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_sewa'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_sewa'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_sewa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_sewa'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_sewa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_sewa'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_sewa'] + $penyesuaian['beban_sewa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_sewa'] + $penyesuaian['beban_sewa'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_sewa'] + $penyesuaian['beban_sewa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_sewa'] + $penyesuaian['beban_sewa']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_sewa'] + $penyesuaian['beban_sewa'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_sewa'] + $penyesuaian['beban_sewa'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_sewa'] + $penyesuaian['beban_sewa'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_sewa'] + $penyesuaian['beban_sewa']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Sewa/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">75</th>
                                        <td>Beban Asuransi</td> <!--// nama akun -->
                                        <?php if($saldo['beban_asuransi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_asuransi'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_asuransi'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_asuransi'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_asuransi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_asuransi'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_asuransi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_asuransi'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_asuransi'] + $penyesuaian['beban_asuransi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_asuransi'] + $penyesuaian['beban_asuransi'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_asuransi'] + $penyesuaian['beban_asuransi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_asuransi'] + $penyesuaian['beban_asuransi']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_asuransi'] + $penyesuaian['beban_asuransi'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_asuransi'] + $penyesuaian['beban_asuransi'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_asuransi'] + $penyesuaian['beban_asuransi'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_asuransi'] + $penyesuaian['beban_asuransi']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Asuransi/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">76</th>
                                        <td>Beban Konsumsi Rapat</td> <!--// nama akun -->
                                        <?php if($saldo['beban_konsumsi_rapat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_konsumsi_rapat'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_konsumsi_rapat'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_konsumsi_rapat'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_konsumsi_rapat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_konsumsi_rapat'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_konsumsi_rapat'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_konsumsi_rapat'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_konsumsi_rapat'] + $penyesuaian['beban_konsumsi_rapat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_konsumsi_rapat'] + $penyesuaian['beban_konsumsi_rapat'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_konsumsi_rapat'] + $penyesuaian['beban_konsumsi_rapat'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_konsumsi_rapat'] + $penyesuaian['beban_konsumsi_rapat']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_konsumsi_rapat'] + $penyesuaian['beban_konsumsi_rapat'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_konsumsi_rapat'] + $penyesuaian['beban_konsumsi_rapat'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_konsumsi_rapat'] + $penyesuaian['beban_konsumsi_rapat'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_konsumsi_rapat'] + $penyesuaian['beban_konsumsi_rapat']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Konsumsi rapat/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">77</th>
                                        <td>Beban Perjalanan Dinas</td> <!--// nama akun -->
                                        <?php if($saldo['beban_perjalanan_dinas'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_perjalanan_dinas'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_perjalanan_dinas'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_perjalanan_dinas'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_perjalanan_dinas'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_perjalanan_dinas'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_perjalanan_dinas'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_perjalanan_dinas'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_perjalanan_dinas'] + $penyesuaian['beban_perjalanan_dinas'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_perjalanan_dinas'] + $penyesuaian['beban_perjalanan_dinas'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_perjalanan_dinas'] + $penyesuaian['beban_perjalanan_dinas'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_perjalanan_dinas'] + $penyesuaian['beban_perjalanan_dinas']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_perjalanan_dinas'] + $penyesuaian['beban_perjalanan_dinas'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_perjalanan_dinas'] + $penyesuaian['beban_perjalanan_dinas'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_perjalanan_dinas'] + $penyesuaian['beban_perjalanan_dinas'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_perjalanan_dinas'] + $penyesuaian['beban_perjalanan_dinas']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Perjalanan Dinas/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">78</th>
                                        <td>Beban Penyusutan Peralatan dan Meubeliar</td> <!--// nama akun -->
                                        <?php if($saldo['beban_penyusutan_peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_peralatan_dan_meubeliar'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_penyusutan_peralatan_dan_meubeliar'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_peralatan_dan_meubeliar'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_penyusutan_peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_penyusutan_peralatan_dan_meubeliar'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_penyusutan_peralatan_dan_meubeliar'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_penyusutan_peralatan_dan_meubeliar'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['beban_penyusutan_peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['beban_penyusutan_peralatan_dan_meubeliar'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['beban_penyusutan_peralatan_dan_meubeliar'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['beban_penyusutan_peralatan_dan_meubeliar']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['beban_penyusutan_peralatan_dan_meubeliar'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['beban_penyusutan_peralatan_dan_meubeliar'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['beban_penyusutan_peralatan_dan_meubeliar'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_penyusutan_peralatan_dan_meubeliar'] + $penyesuaian['beban_penyusutan_peralatan_dan_meubeliar']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Penyusutan Peralatan dan Meubeliar/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">79</th>
                                        <td>Beban Penyusutan Gedung dan Bangunan</td> <!--// nama akun -->
                                        <?php if($saldo['beban_penyusutan_gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_gedung_dan_bangunan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_penyusutan_gedung_dan_bangunan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_gedung_dan_bangunan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_penyusutan_gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_penyusutan_gedung_dan_bangunan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_penyusutan_gedung_dan_bangunan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_penyusutan_gedung_dan_bangunan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_penyusutan_gedung_dan_bangunan'] + $penyesuaian['beban_penyusutan_gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_gedung_dan_bangunan'] + $penyesuaian['beban_penyusutan_gedung_dan_bangunan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_penyusutan_gedung_dan_bangunan'] + $penyesuaian['beban_penyusutan_gedung_dan_bangunan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_penyusutan_gedung_dan_bangunan'] + $penyesuaian['beban_penyusutan_gedung_dan_bangunan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_penyusutan_gedung_dan_bangunan'] + $penyesuaian['beban_penyusutan_gedung_dan_bangunan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_gedung_dan_bangunan'] + $penyesuaian['beban_penyusutan_gedung_dan_bangunan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_penyusutan_gedung_dan_bangunan'] + $penyesuaian['beban_penyusutan_gedung_dan_bangunan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_penyusutan_gedung_dan_bangunan'] + $penyesuaian['beban_penyusutan_gedung_dan_bangunan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Penyusutan Gedung dan Bangunan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">80</th>
                                        <td>Beban Penyusutan Kendaraan</td> <!--// nama akun -->
                                        <?php if($saldo['beban_penyusutan_kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_kendaraan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_penyusutan_kendaraan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_kendaraan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_penyusutan_kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_penyusutan_kendaraan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_penyusutan_kendaraan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_penyusutan_kendaraan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_penyusutan_kendaraan'] + $penyesuaian['beban_penyusutan_kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_kendaraan'] + $penyesuaian['beban_penyusutan_kendaraan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_penyusutan_kendaraan'] + $penyesuaian['beban_penyusutan_kendaraan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_penyusutan_kendaraan'] + $penyesuaian['beban_penyusutan_kendaraan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_penyusutan_kendaraan'] + $penyesuaian['beban_penyusutan_kendaraan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_penyusutan_kendaraan'] + $penyesuaian['beban_penyusutan_kendaraan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_penyusutan_kendaraan'] + $penyesuaian['beban_penyusutan_kendaraan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_penyusutan_kendaraan'] + $penyesuaian['beban_penyusutan_kendaraan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Penyusutan Kendaraan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">81</th>
                                        <td>Beban Pajak Air Permukaan</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pajak_air_permukaan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_air_permukaan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_air_permukaan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_air_permukaan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pajak_air_permukaan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak_air_permukaan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pajak_air_permukaan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak_air_permukaan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pajak_air_permukaan'] + $penyesuaian['beban_pajak_air_permukaan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_air_permukaan'] + $penyesuaian['beban_pajak_air_permukaan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_air_permukaan'] + $penyesuaian['beban_pajak_air_permukaan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak_air_permukaan'] + $penyesuaian['beban_pajak_air_permukaan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pajak_air_permukaan'] + $penyesuaian['beban_pajak_air_permukaan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_air_permukaan'] + $penyesuaian['beban_pajak_air_permukaan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_air_permukaan'] + $penyesuaian['beban_pajak_air_permukaan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak_air_permukaan'] + $penyesuaian['beban_pajak_air_permukaan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Pajak Air Permukaan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">82</th>
                                        <td>Beban Pajak Bunga Bank</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pajak_bunga_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_bunga_bank'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_bunga_bank'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_bunga_bank'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pajak_bunga_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak_bunga_bank'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pajak_bunga_bank'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak_bunga_bank'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pajak_bunga_bank'] + $penyesuaian['beban_pajak_bunga_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_bunga_bank'] + $penyesuaian['beban_pajak_bunga_bank'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_bunga_bank'] + $penyesuaian['beban_pajak_bunga_bank'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak_bunga_bank'] + $penyesuaian['beban_pajak_bunga_bank']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pajak_bunga_bank'] + $penyesuaian['beban_pajak_bunga_bank'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_bunga_bank'] + $penyesuaian['beban_pajak_bunga_bank'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_bunga_bank'] + $penyesuaian['beban_pajak_bunga_bank'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak_bunga_bank'] + $penyesuaian['beban_pajak_bunga_bank']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Pajak Bunga Bank/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">83</th>
                                        <td>Beban Pajak Daerah</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pajak_daerah'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_daerah'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_daerah'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_daerah'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pajak_daerah'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak_daerah'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pajak_daerah'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak_daerah'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pajak_daerah'] + $penyesuaian['beban_pajak_daerah'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_daerah'] + $penyesuaian['beban_pajak_daerah'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_daerah'] + $penyesuaian['beban_pajak_daerah'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak_daerah'] + $penyesuaian['beban_pajak_daerah']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pajak_daerah'] + $penyesuaian['beban_pajak_daerah'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_daerah'] + $penyesuaian['beban_pajak_daerah'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_daerah'] + $penyesuaian['beban_pajak_daerah'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak_daerah'] + $penyesuaian['beban_pajak_daerah']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Pajak Daerah/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">84</th>
                                        <td>Beban Pajak Hiburan</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pajak_hiburan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_hiburan'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_hiburan'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_hiburan'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pajak_hiburan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak_hiburan'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pajak_hiburan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak_hiburan'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pajak_hiburan'] + $penyesuaian['beban_pajak_hiburan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_hiburan'] + $penyesuaian['beban_pajak_hiburan'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_hiburan'] + $penyesuaian['beban_pajak_hiburan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak_hiburan'] + $penyesuaian['beban_pajak_hiburan']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pajak_hiburan'] + $penyesuaian['beban_pajak_hiburan'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_hiburan'] + $penyesuaian['beban_pajak_hiburan'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_hiburan'] + $penyesuaian['beban_pajak_hiburan'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak_hiburan'] + $penyesuaian['beban_pajak_hiburan']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Pajak Hiburan/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">85</th>
                                        <td>Beban Pajak Reklame</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pajak_reklame'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_reklame'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_reklame'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_reklame'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pajak_reklame'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak_reklame'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pajak_reklame'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak_reklame'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pajak_reklame'] + $penyesuaian['beban_pajak_reklame'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_reklame'] + $penyesuaian['beban_pajak_reklame'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_reklame'] + $penyesuaian['beban_pajak_reklame'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak_reklame'] + $penyesuaian['beban_pajak_reklame']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pajak_reklame'] + $penyesuaian['beban_pajak_reklame'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak_reklame'] + $penyesuaian['beban_pajak_reklame'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak_reklame'] + $penyesuaian['beban_pajak_reklame'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak_reklame'] + $penyesuaian['beban_pajak_reklame']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Pajak Reklame/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">86</th>
                                        <td>Beban PPh 21</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pph21'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph21'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph21'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pph21'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pph21'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pph21'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pph21'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pph21'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pph21'] + $penyesuaian['beban_pph21'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph21'] + $penyesuaian['beban_pph21'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph21'] + $penyesuaian['beban_pph21'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pph21'] + $penyesuaian['beban_pph21']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pph21'] + $penyesuaian['beban_pph21'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph21'] + $penyesuaian['beban_pph21'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph21'] + $penyesuaian['beban_pph21'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pph21'] + $penyesuaian['beban_pph21']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban PPh 21/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">87</th>
                                        <td>Beban PPh 23</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pph23'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph23'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph23'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pph23'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pph23'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pph23'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pph23'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pph23'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pph23'] + $penyesuaian['beban_pph23'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph23'] + $penyesuaian['beban_pph23'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph23'] + $penyesuaian['beban_pph23'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pph23'] + $penyesuaian['beban_pph23']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pph23'] + $penyesuaian['beban_pph23'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph23'] + $penyesuaian['beban_pph23'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph23'] + $penyesuaian['beban_pph23'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pph23'] + $penyesuaian['beban_pph23']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban PPh 23/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">88</th>
                                        <td>Beban PPh 25</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pph25'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph25'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph25'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pph25'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pph25'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pph25'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pph25'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pph25'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pph25'] + $penyesuaian['beban_pph25'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph25'] + $penyesuaian['beban_pph25'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph25'] + $penyesuaian['beban_pph25'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pph25'] + $penyesuaian['beban_pph25']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pph25'] + $penyesuaian['beban_pph25'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph25'] + $penyesuaian['beban_pph25'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph25'] + $penyesuaian['beban_pph25'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pph25'] + $penyesuaian['beban_pph25']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban PPh 25/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">89</th>
                                        <td>Beban PPh 29</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pph29'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph29'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph29'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pph29'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pph29'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pph29'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pph29'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pph29'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pph29'] + $penyesuaian['beban_pph29'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph29'] + $penyesuaian['beban_pph29'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph29'] + $penyesuaian['beban_pph29'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pph29'] + $penyesuaian['beban_pph29']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pph29'] + $penyesuaian['beban_pph29'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pph29'] + $penyesuaian['beban_pph29'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pph29'] + $penyesuaian['beban_pph29'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pph29'] + $penyesuaian['beban_pph29']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban PPh 29/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">90</th>
                                        <td>Beban PADes</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pades'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pades'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pades'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pades'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pades'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pades'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pades'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pades'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pades'] + $penyesuaian['beban_pades'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pades'] + $penyesuaian['beban_pades'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pades'] + $penyesuaian['beban_pades'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pades'] + $penyesuaian['beban_pades']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pades'] + $penyesuaian['beban_pades'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pades'] + $penyesuaian['beban_pades'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pades'] + $penyesuaian['beban_pades'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pades'] + $penyesuaian['beban_pades']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban PADes/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">91</th>
                                        <td>Beban Administrasi Umum dan Lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['beban_administrasi_umum_dan_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_administrasi_umum_dan_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_administrasi_umum_dan_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_administrasi_umum_dan_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_administrasi_umum_dan_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_administrasi_umum_dan_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_administrasi_umum_dan_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['bebbeban_administrasi_umum_dan_lainnyaan_air'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_administrasi_umum_dan_lainnya'] + $penyesuaian['beban_administrasi_umum_dan_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_administrasi_umum_dan_lainnya'] + $penyesuaian['beban_administrasi_umum_dan_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_administrasi_umum_dan_lainnya'] + $penyesuaian['beban_administrasi_umum_dan_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_administrasi_umum_dan_lainnya'] + $penyesuaian['beban_administrasi_umum_dan_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_administrasi_umum_dan_lainnya'] + $penyesuaian['beban_administrasi_umum_dan_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_administrasi_umum_dan_lainnya'] + $penyesuaian['beban_administrasi_umum_dan_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_administrasi_umum_dan_lainnya'] + $penyesuaian['beban_administrasi_umum_dan_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_administrasi_umum_dan_lainnya'] + $penyesuaian['beban_administrasi_umum_dan_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Administrasi Umum dan Lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">92</th>
                                        <td>Beban Bunga</td> <!--// nama akun -->
                                        <?php if($saldo['beban_bunga'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_bunga'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_bunga'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_bunga'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_bunga'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_bunga'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_bunga'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_bunga'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_bunga'] + $penyesuaian['beban_bunga'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_bunga'] + $penyesuaian['beban_bunga'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_bunga'] + $penyesuaian['beban_bunga'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_bunga'] + $penyesuaian['beban_bunga']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_bunga'] + $penyesuaian['beban_bunga'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_bunga'] + $penyesuaian['beban_bunga'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_bunga'] + $penyesuaian['beban_bunga'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_bunga'] + $penyesuaian['beban_bunga']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Bunga/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">93</th>
                                        <td>Beban Pajak</td> <!--// nama akun -->
                                        <?php if($saldo['beban_pajak'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_pajak'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_pajak'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_pajak'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_pajak'] + $penyesuaian['beban_pajak'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak'] + $penyesuaian['beban_pajak'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak'] + $penyesuaian['beban_pajak'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak'] + $penyesuaian['beban_pajak']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_pajak'] + $penyesuaian['beban_pajak'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_pajak'] + $penyesuaian['beban_pajak'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_pajak'] + $penyesuaian['beban_pajak'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_pajak'] + $penyesuaian['beban_pajak']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Pajak/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">94</th>
                                        <td>Beban Denda</td> <!--// nama akun -->
                                        <?php if($saldo['beban_denda'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_denda'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_denda'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_denda'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_denda'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_denda'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_denda'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_denda'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_denda'] + $penyesuaian['beban_denda'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_denda'] + $penyesuaian['beban_denda'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_denda'] + $penyesuaian['beban_denda'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_denda'] + $penyesuaian['beban_denda']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_denda'] + $penyesuaian['beban_denda'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_denda'] + $penyesuaian['beban_denda'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_denda'] + $penyesuaian['beban_denda'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_denda'] + $penyesuaian['beban_denda']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Denda/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">95</th>
                                        <td>Beban Diskon</td> <!--// nama akun -->
                                        <?php if($saldo['beban_diskon'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_diskon'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_diskon'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_diskon'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_diskon'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_diskon'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_diskon'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_diskon'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_diskon'] + $penyesuaian['beban_diskon'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_diskon'] + $penyesuaian['beban_diskon'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_diskon'] + $penyesuaian['beban_diskon'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_diskon'] + $penyesuaian['beban_diskon']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_diskon'] + $penyesuaian['beban_diskon'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_diskon'] + $penyesuaian['beban_diskon'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_diskon'] + $penyesuaian['beban_diskon'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_diskon'] + $penyesuaian['beban_diskon']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Diskon/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">96</th>
                                        <td>Beban Lain-lainnya</td> <!--// nama akun -->
                                        <?php if($saldo['beban_lain_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_lain_lainnya'])); ?></td> <!-- neraca saldo debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_lain_lainnya'] > 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($saldo['beban_lain_lainnya'] * -1)); ?></td> <!-- neraca saldo kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($penyesuaian['beban_lain_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_lain_lainnya'])); ?></td> <!-- penyesuaian debit -->
                                            <td>-</td> 
                                        <?php elseif($penyesuaian['beban_lain_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah($penyesuaian['beban_lain_lainnya'] * -1)); ?></td> <!-- penyesuaian kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>

                                        <?php if($saldo['beban_lain_lainnya'] + $penyesuaian['beban_lain_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_lain_lainnya'] + $penyesuaian['beban_lain_lainnya'])); ?></td> <!-- neraca setelahnya debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_lain_lainnya'] + $penyesuaian['beban_lain_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_lain_lainnya'] + $penyesuaian['beban_lain_lainnya']) * -1)); ?></td> <!-- neraca setelahnya kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        
                                        <td>-</td> <!--// laba rugi debit -->
                                        <td>-</td>

                                        <?php if($saldo['beban_lain_lainnya'] + $penyesuaian['beban_lain_lainnya'] > 0): ?>
                                            <td><?php echo e(formatRupiah($saldo['beban_lain_lainnya'] + $penyesuaian['beban_lain_lainnya'])); ?></td> <!-- neraca debit -->
                                            <td>-</td> 
                                        <?php elseif($saldo['beban_lain_lainnya'] + $penyesuaian['beban_lain_lainnya'] < 0): ?>
                                            <td>-</td> 
                                            <td><?php echo e(formatRupiah(($saldo['beban_lain_lainnya'] + $penyesuaian['beban_lain_lainnya']) * -1)); ?></td> <!-- neraca kredit -->
                                        <?php else: ?>
                                            <td>-</td>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="/wtb/Beban Lain-lainnya/edit" class="nav-icon fas fa-edit"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">97</th>
                                        <td><b>Jumlah</b></td> <!--// nama akun -->
                                        <td><b>884.000.000</b></td> <!--// neraca saldo debit -->
                                        <td><b>884.000.000</b></td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td><b>884.000.000</b></td> <!--// neraca saldo setelah debit -->
                                        <td><b>884.000.000</b></td>
                                        <td><b>88.150.000</b></td> <!--// laba rugi debit -->
                                        <td><b>719.000.000</b></td>
                                        <td><b>852.300.000</b></td> <!--// neraca debit -->
                                        <td><b>221.450.000</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">98</th>
                                        <td><b>Laba/Rugi Bersih</b></td> <!--// nama akun -->
                                        <td>-</td> <!--// neraca saldo debit -->
                                        <td>-</td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca saldo setelah debit -->
                                        <td>-</td>
                                        <td><b>630.850.000</b></td> <!--// laba rugi debit -->
                                        <td>-</td>
                                        <td>-</td> <!--// neraca debit -->
                                        <td><b>630.850.000</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="">99</th>
                                        <td><b>Total</b></td> <!--// nama akun -->
                                        <td><b>884.000.000</b></td> <!--// neraca saldo debit -->
                                        <td><b>884.000.000</b></td> 
                                        <td>-</td> <!--//penyesuaian debit -->
                                        <td>-</td>
                                        <td><b>884.000.000</b></td> <!--// neraca saldo setelah debit -->
                                        <td><b>884.000.000</b></td>
                                        <td><b>719.000.000</b></td> <!--// laba rugi debit -->
                                        <td><b>719.000.000</b></td>
                                        <td><b>852.300.000</b></td> <!--// neraca debit -->
                                        <td><b>852.300.000</b></td>
                                    </tr>
                                    
                                
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
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/wtb/index.blade.php ENDPATH**/ ?>