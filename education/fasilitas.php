	<!-- start banner Area -->
	<section class="banner-area relative about-banner" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Fasilitas
					</h1>
					<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="gallery.html">Fasilitas</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start gallery Area -->





	<section class="top-category-widget-area pt-90 pb-90 ">
		<div class="container">
			<div class="row">
				<?php

				include "pages/set/koneksi.php";
				$sql = "SELECT * FROM `fasilitas`";
				$query = mysqli_query($db, $sql);
				$nourut = 1;
				while ($row = mysqli_fetch_array($query)) {
					?>

					<div class="col-lg-4">
						<div class="single-cat-widget">
							<div class="content relative">
								<div class="overlay overlay-bg"></div>
								<a href="..\contoh\public\pages\tables\images\Fasilitas\<?php echo $row[2] ?>">
									<div class="thumb">
										<img class="content-image img-fluid d-block mx-auto" src="..\contoh\public\pages\tables\images\Fasilitas\<?php echo $row[2] ?>">
									</div>
									<div class="content-details">
										<h4 class="content-title mx-auto text-uppercase"><?php echo $row[1] ?></h4>
										<span></span>
										<p>Fasilitas</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>