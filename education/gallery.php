	
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Ektrakulikuler				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.html"> Gallery</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start gallery Area -->

    <?php

                            include "pages/set/koneksi.php";
                            $sql = "SELECT `kode_eskul`,`nama_eskul`,`foto_eskul` FROM `eskul`";
                            $query = mysqli_query($db, $sql);
                            $nourut = 1;
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                               

                            <?php } ?>

                        </tbody>


			<section class="gallery-area section-gap">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-5">
							<a href="img/gallery/g2.jpg" class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<img class="img-fluid" src="img/gallery/g2.jpg" alt="">				
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
													

			