			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Berita
							</h1>
							<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="events.html"> Berita</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">

				<div class="container">
					<div class="row align-items-center">
						<?php

						include "set/koneksi.php";

						$sql = "select * from pengumuman";
						$result = mysqli_query($db, $sql);
						while ($row = mysqli_fetch_array($result)) {

							?>
							<div class="col-lg-6 pb-30">
								<div class="single-carusel row align-items-center">
									<div class="col-12 col-md-6 thumb">
										<img class="img-fluid" src="../contoh/public/pages/tables/images/Pengumuman/<?php echo $row[3]; ?>" alt="">
									</div>
									<div class="detials col-12 col-md-6">
										<p><?php echo $row[4]; ?></p>
										<a href="index.php?slink=event-details.php&id=<?php echo $row[0] ?>">
											<h4><?php echo $row[1]; ?></h4>
										</a>
										<p>
											<?php echo $row[2]; ?>
										</p>
									</div>
								</div>
							</div>
						<?php
						}
						?>


					</div>
				</div>
			</section>

			<!-- End events-list Area -->