			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Berita			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="events.html"> Berita</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				 <?php

                            include "set/koneksi.php";

                            $sql = "select * from pengumuman";
                            $result = mysqli_query($db, $sql);
                            while ($row = mysqli_fetch_array($result)) {

                                ?>
			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="event-details.html"><h4><?php echo $row[1]; ?></h4></a>
									<p>
										<?php echo $row[2]; ?>
									</p>
								</div>
							</div>
						</div>
																					
					
					</div>
				</div>	
			</section>
			<?php
}
?>
			<!-- End events-list Area -->
				

