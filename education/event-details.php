 <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Detail Berita
                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="event-details.html"> Event Details</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start event-details Area -->
    <section class="event-details-area section-gap">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 event-details-left">
                    <?php

                        include "set/koneksi.php";
                        $id = $_GET['id'];
                        $sql = "select * from pengumuman where id_pengumuman='$id'";
                        // echo $sql;
                        $result = mysqli_query($db, $sql);
                        while ($row = mysqli_fetch_array($result)) {

                            ?>
                    <div class="main-img">
                        <img class="img-fluid" src="../contoh/public/pages/tables/images/Pengumuman/<?php echo $row[3]; ?>" alt="">
                    </div>
                    <div class="details-content">
                        
                            <a href="#">
                                <h4><?php echo $row[1] ?></h4>
                            </a>
                            <p>
                                <?php echo $row[2]?>
                            </p>
                            
                        </div>
                   
                    
                </div>
                <div class="col-lg-4 event-details-right">
                    <div class="single-event-details">
                        <h4>Details</h4>
                        <ul class="mt-10">
                            <li class="justify-content-between d-flex">
                                <span>Tanggal Upload</span>
                                <span><?php echo substr($row[4],0,11); ?></span>
                            </li>
                            
                        </ul>
                    </div>
                     <?php
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End event-details Area -->

