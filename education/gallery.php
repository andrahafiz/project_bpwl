	<!-- start banner Area -->
	<section class="banner-area relative about-banner" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Ektrakulikuler
					</h1>
					<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="gallery.html">Ektrakulikuler</a></p>
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
				$sql = "SELECT `kode_eskul`,`nama_eskul`,`foto_eskul`,`jenis_eskul` FROM `eskul`";
				$query = mysqli_query($db, $sql);
				$nourut = 1;
				while ($row = mysqli_fetch_array($query)) {
					?>
					<div class="col-lg-4">
						<div class="single-cat-widget">
							<div class="content relative">
								<div class="overlay overlay-bg"></div>
								<a href="#" target="_blank">
									<div class="thumb">
										<img class="content-image img-fluid d-block mx-auto" src="..\contoh\public\pages\tables\images\Ekstrakulikuler\<?php echo $row[2] ?>">
									</div>
									<div class="content-details">
										<h4 class="content-title mx-auto text-uppercase"><?php echo $row[1] ?></h4>
										<span></span>
										<p><?php echo $row[3] ?></p>
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