 <?php
    include "set/koneksi.php";
    $sql = "select * from sekolah_profile";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    ?>
 <!-- start banner Area -->
 <section class="banner-area relative" id="home">
     <div class="overlay overlay-bg"></div>
     <div class="container">
         <div class="row fullscreen d-flex align-items-center justify-content-between">
             <div class="banner-content col-lg-9 col-md-12">
                 <h1 class="text-uppercase">
                     Selamat Datang di website
                     <?php $row[0]; ?>
                 </h1>
                 <p class="pt-10 pb-10">
                     In the history of modern astronomy, there is probably no one greater leap forward than the
                     building and launch of the space telescope known as the Hubble.
                 </p>
                 <a href="#" class="primary-btn text-uppercase">Get Started</a>
             </div>
         </div>
     </div>
 </section>
 <!-- End banner Area -->