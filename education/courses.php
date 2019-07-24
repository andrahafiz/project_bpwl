start banner Area -->
<section class="banner-area relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Guru dan Pegawai
				</h1>
				<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="courses.html"> Guru dan Pegawai</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start popular-courses Area -->
<section class="popular-courses-area section-gap courses-page">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Guru dan Pegawai</h1>
					<p>Daftar nama guru dan pegawai</p>
				</div>
			</div>
		</div>



		<div class="row">

			<?php

			include "set/koneksi.php";

			$sql = "select * from guru, jabatan where guru_jabatan = jabatan_id";
			$result = mysqli_query($db, $sql);
			while ($row = mysqli_fetch_array($result)) {

				?>


				<div class="single-popular-carusel col-lg-3 col-md-6">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="../contoh/public/pages/tables/images/Guru/<?php echo $row[2] ?>" alt="" title="">
						</div>
					</div>
					<div class="details">
						<a href="index.php?slink=course-details.php&id=<?php echo $row[0] ?>">
							<h4>
								Nama Guru
							</h4>
						</a>
						<p>
							Nip : <?php echo $row[0]; ?> <br>
							Nama : <?php echo $row[1]; ?> <br>
							Jabatan : <?php echo $row[10]; ?> <br>
						</p>
					</div>
				</div>

			<?php
			}
			?>


		</div>
	</div>

</section>
<!-- End popular-courses Area