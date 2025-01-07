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
        .container
        {
            width: 1200px;
            height:fit-content;
            margin-top:100px;
            display: grid;
            grid-template-columns:repeat(auto-fit, minmax(350px, 1fr));
            grid-gap: 10px;
            padding: 10px;
            box-sizing: border-box;    
        }
        .container .box
        {
            position: relative;
            background: #D9D9D9;
            padding: 20px 40px 10px;
            text-align: center;
            overflow: hidden;
            border-radius: 20px;
        }

        .container .box h2
        {
            position: relative;
            margin: 0;
            padding: 0;
            font-size: 50px;
            color: #000;
        }
        .container .box h3
        {
            position: relative;
            margin: 0;
            padding: 0;
            color: #303C54;
        }
    </style>


        <div class="listbox">
            <h3>Cara Order</h3>
            <h1>Bagaimana cara order aplikasi SIAB-DES?</h1>
        </div>
        <div class="container" >
            <div class="box">
                <h2>01</h2>
                <h3>Hubungi di kontak yang tersedia untuk pengisian form order</h3>
            </div>
            <div class="box">
                <h2>02</h2>
                <h3>Surat kerjasama akan dikirimkan segera setelah form terisi</h3>
            </div>
            <div class="box">
                <h2>03</h2>
                <h3>Lakukan pembayaran sesuai dengan invoide yang diberkan</h3>
            </div>
            <div class="box">
                <h2>04</h2>
                <h3>Kirim bukti pembayaran ke kontak yang tersedia untuk proses verifikasi</h3>
            </div>
            <div class="box">
                <h2>05</h2>
                <h3>aplikasi dapat digunakan 1x24 jam setelah proses verifikasi selesai</h3>
            </div>
        </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/initialPage/caraOrder.blade.php ENDPATH**/ ?>