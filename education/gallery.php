	
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Ektrakulikuler				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.html">Ektrakulikuler</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start gallery Area -->

   
                               

                           



			<section class="gallery-area section-gap">
				<div class="container">
					<div class="row">
						 <?php

                            include "pages/set/koneksi.php";
                            $sql = "SELECT `kode_eskul`,`nama_eskul`,`foto_eskul` FROM `eskul`";
                            $query = mysqli_query($db, $sql);
                            $nourut = 1;
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
						<div class="col-lg-5">
							<a href="img/gallery/g2.jpg" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="..\contoh\public\pages\tables\images\Ekstrakulikuler\<?php echo $row[2]?>" >
											<h1><?php echo $row[1]?>			</h1>
									</div>
								</div>
							</a>
						</div>
						 <?php } ?>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
													

			