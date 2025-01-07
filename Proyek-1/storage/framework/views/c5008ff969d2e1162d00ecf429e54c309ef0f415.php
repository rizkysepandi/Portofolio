

<?php $__env->startSection('content'); ?>
<style>
    .tabcontent {
        display: none;
        padding: 6px 12px;
        
        border-top: none;
        }
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
                            <h3 class="card-title">Buku Besar</h3>
                        </div>

                        

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                                <ul class="nav tablinks">
                                    
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle text-black fw-bold fs-4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Nama Akun</a>
                                      <ul class="dropdown-menu">
                                        <?php $__currentLoopData = $nama_akuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama_akun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($nama_akun->id < '15' && $nama_akun->d_k != ''): ?>
                                                <li><a type="button" class="dropdown-item tablinks" onclick="openAkun(event, '<?php echo e($nama_akun->nama); ?>')"><?php echo e($nama_akun->nama); ?></a></li>        
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </ul>
                                    </li>
                                    
                                </ul>
                            </div>
                            
                            <div id="Kas" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>KAS</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Kas'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Kas'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Kas'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Kas di Bank A" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>KAS DI BANK A</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Kas di Bank A'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Kas di Bank A'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Kas di Bank A'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Kas di Bank B" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>KAS DI BANK B</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Kas di Bank B'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Kas di Bank B'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Kas di Bank B'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Kas di Bank C" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>KAS DI BANK C</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Kas di Bank C'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Kas di Bank C'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Kas di Bank C'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Kas Kecil" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>KAS KECIL</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Kas Kecil'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Kas Kecil'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Kas Kecil'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Giro" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>GIRO</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Giro'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Giro'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Giro'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Deposito" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>DEPOSITO</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Deposito'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Deposito'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Deposito'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Piutang Usaha" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>PIUTANG USAHA</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Piutang Usaha'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Piutang Usaha'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Piutang Usaha'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Persediaan Barang Dagangan" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>PERSEDIAAN BARANG DAGANGAN</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Persediaan Barang Dagangan'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Persediaan Barang Dagangan'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Persediaan Barang Dagangan'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Persediaan Makan dan Minuman" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>PERSEDIAAN MAKAN DAN MINUMAN</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Persediaan Makan dan Minuman'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Persediaan Makan dan Minuman'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Persediaan Makan dan Minuman'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Perlengkapan" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>PERLENGKAPAN</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Perlengkapan'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Perlengkapan'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Perlengkapan'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            <div id="Sewa Dibayar Dimuka" class="tabcontent">
                                <p class="hide"><?php echo e($iterasi = 0); ?><?php echo e($saldo = 0); ?></p>
                                <h2>SEWA DIBAYAR DIMUKA</h2>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    
                                        <?php $__currentLoopData = $jurnals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($jurnal->datas->first()->nama_akun == 'Sewa Dibayar Dimuka'): ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun != 'Sewa Dibayar Dimuka'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('m F Y')); ?></td>
                                                            <td><?php echo e($data->nama_akun); ?></td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo + $data->kredit)); ?></td>
                                                        </tr>    
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $jurnal->datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($data->nama_akun == 'Sewa Dibayar Dimuka'): ?>
                                                        <tr>
                                                            <td><?php echo e($iterasi = $iterasi + 1); ?></td>
                                                            <td><?php echo e($jurnal->tanggal->format('d F Y')); ?></td>
                                                            <td><?php echo e($jurnal->datas->first()->nama_akun); ?></td>
                                                            <td>-</td>
                                                            <td><?php echo e($data->formatRupiah('kredit')); ?></td>
                                                            <td><?php echo e(formatRupiah($saldo = $saldo - $data->kredit)); ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
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

    
    <script>
        function openAkun(evt, akunName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(akunName).style.display = "block";
          evt.currentTarget.className += " active";
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('bumdes.dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/dashboard/buku_besar/index.blade.php ENDPATH**/ ?>