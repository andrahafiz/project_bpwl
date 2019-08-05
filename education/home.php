 <?php
    include "set/koneksi.php";

    $sql = "select * from sekolah_profile";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    $row
    ?>
 <!-- start banner Area -->
 <section class="banner-area relative" id="home">
     <div class="overlay overlay-bg"></div>
     <div class="container">
         <div class="row fullscreen d-flex align-items-center justify-content-between">
             <div class="banner-content col-lg-9 col-md-12">
                 <h1 class="text-uppercase">
                     Selamat Datang di website<br>
                     <?php echo $row[0]; ?>
                 </h1>
             </div>
         </div>
     </div>
 </section>
 <!-- End banner Area -->