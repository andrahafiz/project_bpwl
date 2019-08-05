	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Education</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
			CSS
			============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap/style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<?php
	include "set/koneksi.php";

	$sql = "select * from sekolah_profile";
	$result = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_array($result)) {

		?>

		<body>
			<header id="header" id="home">
				<div class="header-top">
					<div class="container">
						<div class="row">

							<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
								<a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text"><?php echo $row[2] ?></span></a>
								<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text"><?php echo $row[3] ?></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
						<div id="logo">
							<div>
								<a href='index.php'><img src='img/<?php echo $row[4] ?>' alt='' width='90' title='' /></a>
							</div>

						</div>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
								<li><a href="index.php">Beranda</a></li>
								<li><a href="index.php?slink=about.php">Tentang Kami</a></li>
								<li><a href="index.php?slink=courses.php">Guru dan Pegawai</a></li>
								<li><a href="index.php?slink=events.php">Berita</a></li>
								<li><a href="index.php?slink=gallery.php">Ekstrakulikuler</a></li>
								<li><a href="index.php?slink=fasilitas.php">Fasilitas</a></li>

							</ul>
						</nav><!-- #nav-menu-container -->
					</div>
				</div>
			</header><!-- #header -->

			<?php
			error_reporting(0);
			$apaja = $_REQUEST['slink'];
			if (isset($apaja))
				include "$apaja";
			else
				include "home.php";
			?>


			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
		<?php
		}
		?>
		<!-- End footer Area -->


		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
		</script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.tabs.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
	</body>

	</html>