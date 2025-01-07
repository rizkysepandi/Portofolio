<!-- resources/views/child.blade.php -->

 
<?php $__env->startSection('title', 'SIABDES'); ?>
 
<?php $__env->startSection('sidebar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('sidebar'); ?>
 
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
 
<style>
            @import url('https://fonts.googleapis.com/css?family=Ubuntu:400,500,700');
        /* body{
            margin:0;
            padding:0;
            display:flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
            font-family:'Ubuntu', sans-serif;
        } */
        .listbox h3{
            position: relative;
            width: 1008px;
            height: 120px;
            left: 170px;
            top: 40px;
            font-weight: 500;
            font-size: 20px;
            line-height: 33px;
            text-align: center;
            letter-spacing: -0.0011em;
            color: #303C54;
        }

        .listbox h1{
            position: relative;
            width: 470px;
            height: 50px;
            left: 439px;
            top: 50px;
            font-size: 30px;
            font-weight: bold;
            line-height: 30px;
            text-align: center;
            text-transform: capitalize;
            letter-spacing: -0.0011em;
            color: #000000;
        }

        .row
        {
            position:relative;
            top: 100px;
        }
        .row .box_main
        {
            position: relative;
            background: #303C54;
            padding: 20px 40px 10px;
        }
    </style>
    <div class="listbox">
            <h3>Fitur SIAB-DES</h3>
            <h1>Apa saja fitur aplikasi SIAB-DES?</h1>
    </div>
    <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="box_main">
                <div class="icon_1"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/jurnal-umum.png')); ?>" class="rounded-2"></div>
                <h3 class="accounting_text">Fitur Jurnal Umum</h3>
                
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="box_main ">
                <div class="icon_1"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/jurnal-khusus.png')); ?>"></div>
                <h3 class="accounting_text">Jurnal Khusus</h3>
                <p class="lorem_text">Pembelian, Penjualan, Pengeluaran Kas, dan Pemasukkan Kas</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="box_main">
                <div class="icon_1"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/laporan-keuangan.png')); ?>"></div>
                <h3 class="accounting_text">Laporan Keuangan</h3>
                <p class="lorem_text">Laba Rugi, Posisi Keuangan,<br> dan CALK</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="box_main">
                <div class="icon_1"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/invoice.png')); ?>"></div>
                <h3 class="accounting_text">Invoice</h3>
                <p class="lorem_text">Formulir Permintaan Kas, Formulir Purchase Order, Formulir Pengiriman Barang, Invoice Penjualan Tunai, dan Invoice Penjualan Kredit</p>
              </div>
            </div>
          </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/initialPage/fitur.blade.php ENDPATH**/ ?>