<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <?php
                    include "pages/set/koneksi.php";
                    $id = $_GET['id'];
                    $sql = "select * from view_guru_detail where nip_guru=$id";
                    // echo $sql;
                    $result = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        Nama Guru <?php echo $row[1]; ?>

                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="courses.html"> Popular Courses</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start course-details Area -->

    <section class="course-details-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-contents">
                    <div class="main-image">
                        <img class="img-fluid" src="../contoh/public/pages/tables/images/Guru/<?php echo $row[5] ?>" alt="">
                    </div>
                    <div class="jq-tab-wrapper" id="horizontalTab">

                        <div class="jq-tab-content-wrapper" style=" margin-bottom: 50px;">
                            <div class="jq-tab-content active" data-tab=" 1">

                                Nama ( Singkatan ) : <?php echo $row[1] ?> ( <b><?php echo $row[2] ?></b> )
                                <br />
                                NIP : <?php echo $row[0] ?>
                                <br />
                                Jabatan : <?php echo $row[6] ?>
                                <br />
                                Alamat : <?php echo $row[9] ?>
                                <br />
                                Tempat Lahir : <?php echo $row[7] ?>
                                <br />
                                Tanggal Lahir : <?php echo $row[8] ?>
                                <br />
                                Pendidikan Terakhir : <?php echo $row[4] ?>




                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 right-contents">
                    <ul>

                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>NIP</p>
                                <span><?php echo $row[0] ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Nama Guru</p>
                                <span class="or"><?php echo $row[1] ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Tanggal Lahir </p>
                                <span><?php echo $row[8] ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Alamat </p>
                                <span><?php echo $row[9] ?></span>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="primary-btn text-uppercase">Biodata Singkat</a>
                <?php } ?>
            </div>
        </div>
    </div>


</section>
<!-- End course-details Area -->

</body>

</html>