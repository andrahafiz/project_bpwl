<?php
$id = $_GET['id'];
?>
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <?php

                            include "set/koneksi.php";

                            $sql = "select * from guru, jabatan where guru_jabatan = jabatan_id and nip_guru =$id";
                            $result = mysqli_query($db, $sql);
                            while ($row = mysqli_fetch_array($result)) {

                                ?>
                <h1 class="text-white">
                    <?php echo $row[1]; ?>
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="courses.html"> Data Guru </a></p>
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
                    <img class="img-fluid" src="img/m-img.jpg" alt="">
                </div>
                <div class="jq-tab-wrapper" id="horizontalTab">

                    <div class="jq-tab-content-wrapper" style=" margin-bottom: 50px;">
                        <div class="jq-tab-content active" data-tab=" 1">
                            
                            <div class="row" style="margin-bottom:10px; padding:10px;">
                                <div class="col-4">
                                    <b> Nama</b>
                                </div>
                                <div class="col-8">
                                    : <?php echo $row[1]; ?> 
                                    <hr />
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:10px; padding:10px;">
                                <div class="col-4">
                                    <b> Singkatan </b>
                                </div>
                                <div class="col-8">
                                    : <?php echo $row[3]; ?>
                                    <hr />
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:10px; padding:10px;">
                                <div class="col-4">
                                    <b> Tempat Tanggal Lahir</b>
                                </div>
                                <div class="col-8">
                                    : <?php echo $row[6]; ?>, <?php echo $row[7]; ?>
                                    <hr />
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:10px; padding:10px;">
                                <div class="col-4">
                                    <b> Alamat</b>
                                </div>
                                <div class="col-8">
                                    : <?php echo $row[8]; ?>
                                    <hr />
                                </div>
                            </div>

                            
                            <div class="row" style="margin-bottom:10px; padding:10px;">
                                <div class="col-4">
                                    <b>Jabatan</b>
                                </div>
                                <div class="col-8">
                                    : <?php echo $row[10]; ?>
                                    <hr />
                                </div>
                            </div>

                            <div class="row" style="margin-bottom:10px; padding:10px;">
                                <div class="col-4">
                                    <b>Pendidikan Terakhir</b>
                                </div>
                                <div class="col-8">
                                    : <?php echo $row[4]; ?>
                                    <hr />

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 right-contents">
                <ul>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Nama Guru</p>
                            <span class="or"> <?php echo $row[1]; ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Tanggal Lahir </p>
                            <span><?php echo $row[6];?>, <?php echo $row[7];?></span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Jabatan</p>
                            <span><?php echo $row[10];?></span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Alamat </p>
                            <span><?php echo $row[8];?></span>
                        </a>
                    </li>
                </ul>
                <a href="#" class="primary-btn text-uppercase">Biodata Singkat</a>
            </div>
        </div>
    </div>
</section>
<?php
}
?>
<!-- End course-details Area -->

</body>

</html>