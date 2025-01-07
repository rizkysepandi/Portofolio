<!-- resources/views/child.blade.php -->

 
<?php $__env->startSection('title', 'SIABDES'); ?>
 
<?php $__env->startSection('sidebar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('sidebar'); ?>
 
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
    <div class=" banner">
        <div class="d-flex justify-content-center text-black  " style="align-items:center;height:100%;width:100%">
            <div class="text-center">
                <p class="fw-bold fs-1" style="margin-bottom: 10rem;margin-top: 10rem">
                    Aplikasi Penyusunan dan Pencatatan Laporan Keuangan <br><br> BUMDes Berbasis SAK EMKM 
                </p>
                <div class="">
                    <p class="fw-semibold mt-5" style="font-size: 36px">LET’S JOIN WITH US</p>
                    <p class="fw-semibold" style="font-size: 24px">Mari Membangun Kesejahteraan Desa Untuk Ekonomi <br>Indonesia Bersama SIAB-DES</p>
                </div>
                
            </div>
            
            <p></p>
            
        </div>
    </div>
    <!--kelebihan section start -->
    <div class="services_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h1 class="services_taital">Apa keunikan dari SIAB-DES? </h1>
              <!-- <p class="services_text">Aplikasi Penyusunan dan Pencatatan Laporan Keuangan BUMDes Berbasis SAK EMKM  </p> -->
              <div class="moremore_bt"><a href="/kelebihan">Read More </a></div>
            </div>
            <div class="col-md-4">
              <div><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/logo-kelebihan.jpg')); ?>" class="image_1"></div>
              
            </div>
          </div>
        </div>
      </div>
      <!--kelebihan section end -->
      <!--services section start -->
    <div class="what_we_do_section layout_padding">
        <div class="container">
          <h1 class="what_taital">FITUR APLIKASI SIAB-DES</h1>
          
          <div class="what_we_do_section_2">
            <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="box_main">
                <div class="icon_1"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/jurnal-umum.png')); ?>" class="rounded-2"></div>
                <h3 class="accounting_text">Jurnal Umum</h3>
                
                <div class="moremore_bt_1"><a href="/fitur">Read More </a></div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="box_main ">
                <div class="icon_1"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/jurnal-khusus.png')); ?>"></div>
                <h3 class="accounting_text">Jurnal Khusus</h3>
                
                <div class="moremore_bt_1"><a href="/fitur">Read More </a></div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="box_main">
                <div class="icon_1"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/laporan-keuangan.png')); ?>"></div>
                <h3 class="accounting_text">Laporan Keuangan</h3>
                
                <div class="moremore_bt_1"><a href="/fitur">Read More </a></div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="box_main">
                <div class="icon_1"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/invoice.png')); ?>"></div>
                <h3 class="accounting_text">Invoice</h3>
                
                <div class="moremore_bt_1"><a href="/fitur">Read More </a></div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <!--services section end -->
      <!--cara order section start -->
    <div class="services_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h1 class="services_taital">Bagaimana cara order <br> aplikasi SIAB-DES? </h1>
              <!-- <p class="services_text">Aplikasi Penyusunan dan Pencatatan Laporan Keuangan BUMDes Berbasis SAK EMKM  </p> -->
              <div class="moremore_bt"><a href="/cara-order">Read More </a></div>
            </div>
            <div class="col-md-4">
              <div><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/cara-order.jpg')); ?>" class="image_1"></div>
            </div>
          </div>
        </div>
      </div>
      <!--cara order section end -->
      <div class="footer_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <a href="/kontak"><h4 class="about_text">Kontak Kami</h4></a>
              <div class="location_text"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/map-icon.png')); ?>"><span class="padding_left_15">Gedung D, Bandung Techno Park, Bandung Indonesia</span></div>
              <div class="location_text"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/call-icon.png')); ?>"><span class="padding_left_15">+62 823-2327-9944</span></div>
              <div class="location_text"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/mail-icon.png')); ?>"><span class="padding_left_15">siabdeswebapp @gmail.com</span></div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h4 class="about_text">Tentang SIAB-DES</h4>
              <p class="dolor_text">SIAB-DES adalah aplikasi akuntansi BUMDES yang digunakan untuk laporan pencatatan keuangan BUMDES </p>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h4 class="about_text">Social Media</h4>
                <div class="footer_images">
                    <div class="">
                        <div class="image_12">
                            <a href="" class="text-white"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/fb-icon.png')); ?>">  siabdes.official</a>
                        </div>
                        <div class="image_12">
                            <a href="" class="text-white"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/twitter-icon.png')); ?>">  @SIAB-DES</a>
                        </div>
                        <div class="image_12">
                            <a href="" class="text-white"><img src="<?php echo e(asset('BUMDES/assets/halaman_awal/linkedin-icon.png')); ?>">  SIAB-DES</a>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
            
          </div>
          <!-- copyright section start 
          <div class="copyright_section">
            <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Free html  Templates</a></div>
          </div> -->
          <!-- copyright section end -->
        </div>
      </div>
      <!--footer section end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rizky.SHS\Documents\GitHub\Bumdes\resources\views/bumdes/initialPage/index.blade.php ENDPATH**/ ?>