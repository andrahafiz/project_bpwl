<?php
	 include("../koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TAMPILKAN DATA DATABASE</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0">
</head>

<body>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1">
					<div class="table100-firstcol">

						<table border="0">
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1" colspan="2">Nama Acara</th>
								</tr>
							</thead>
							<tbody>
							<?php
								// $sql  = 'SELECT acara_nama, acara_logo from acara a,hima h where a.acara_penyelenggara=h.hima_id';
								$sql  = 'SELECT acara_nama,ukm_singkatan,hima_singkatan,acara_logo FROM acara a LEFT JOIN hima h on a.acara_penyelenggara=h.hima_id LEFT JOIN ukm u on a.acara_penyelenggara=u.ukm_id';
								$query=mysqli_query($db,$sql);
								$jumlahbaris=mysqli_num_rows($query);
								$i=0;
								
								while ($a=mysqli_fetch_array($query)){
									
									echo "
									<tr class='row100 body'>
										<td class='cell100 column1'>$a[0]</td>
										<td><img src='images/icons/$a[3]' width='70px' height='70px'></td>
									</tr>";
									
								}
							?>
							</tbody>
						</table>
					</div>
					
					<div class="wrap-table100-nextcols js-pscroll">
						<div class="table100-nextcols">
							<table border="0">
								<thead>
									<tr class="row100 head">
										<th class="cell100 column2" colspan="2">Penyelenggara</th>
										<th class="cell100 column2">Logo</th>
										<th class="cell100 column3">Waktu Acara</th>
										<th class="cell100 column4">Selesai Acara</th>
										<th class="cell100 column5">Ketua Acara</th>
										<th class="cell100 column5">Wakil Ketua Acara</th>
										<th class="cell100 column5">Sekretaris Acara</th>
										<th class="cell100 column5">Bendahara Acara</th>
										<th class="cell100 column8">File</th>
										<th class="cell100 column6">Status</th>
										<th class="cell100 column7">Keterangan</th>
									</tr>

								</thead>

								<tbody>
								<?php
								$sql  = 'SELECT acara_logo,ukm_singkatan,hima_singkatan,hima_logo,ukm_logo, acara_tgl_awal,acara_tgl_akhir,acara_ketua,acara_wakil,acara_sekre,acara_bendahara,acara_file,acara_status,acara_keterangan, acara_nama FROM acara a LEFT JOIN hima h on a.acara_penyelenggara=h.hima_id LEFT JOIN ukm u on a.acara_penyelenggara=u.ukm_id';
									$query=mysqli_query($db,$sql);
									$jumlahbaris=mysqli_num_rows($query);
								while ($a=mysqli_fetch_array($query)){

									//mengubah tanggal menjad 01 December 2018 dari 2018-12-01
									$tgl_mulai= date('d F Y', strtotime($a[5]));
									$tgl_akhir= date('d F Y', strtotime($a[6]));
							
									// PERINTAH MENGGABUNGKAN HIMA DAN UKM
									$z=$a[1]; #Mengambil nilai dari kolom 1 ukm_singkatan dan menyimpanya kedalam variable $z

									if (!empty($z)) {
										// $k=$ukm;
										//UKM PUNYA
										$penyelenggara=$a[1];
										$logo=$a[4];
										
									}else{
										// $k=$hima;
										//HIMA PUNYA
										$penyelenggara=$a[2];
										$logo=$a[3];
										
									}
										echo "<tr class='row100 body'>
											<td class='cell100 column1'>  $penyelenggara</td>
											<td class='cell100 column2' ><img src='images/icons/$logo' width='55px' height='55px' alt='Logo  $penyelenggara'></td>
											<td class='cell100 column2'><img src='images/icons/$a[0] ' width='70px' height='70px' alt='Logo Acara $a[14]'></td> 
											<td class='cell100 column3'>  $tgl_mulai </td>
											<td class='cell100 column4'>  $tgl_akhir </td>
											<td class='cell100 column5'>  $a[7] </td>
											<td class='cell100 column5'>  $a[8] </td>
											<td class='cell100 column5'>  $a[9] </td>
											<td class='cell100 column5'>  $a[10] </td>
											<td class='cell100 column6'>  $a[11] </td>
											<td class='cell100 column7'>  $a[12] </td>
											<td class='cell100 column8'>  $a[13] </td>
										</tr>";
				
								}?>
									<!-- <tr class="row100 body">
										<td class="cell100 column2">ITSA</td>
										<td ><img src="images/icons/itsa.png" width="55px" height="55px"></td>
										<td class="cell100 column2"><img src="images/icons/origami.png" width="70px" height="70px"></td>
										<td class="cell100 column3">2018-12-07</td>
										<td class="cell100 column4">2018-12-07</td>
										<td class="cell100 column5">Rafly</td>
										<td class="cell100 column5">Rony</td>
										<td class="cell100 column5">Ilmi</td>
										<td class="cell100 column5">Mey</td>
										<td class="cell100 column8">Nama File</td>
										<td class="cell100 column6">Selesai</td>
										<td class="cell100 column7">Acara Futsal antar kelas di bawah naungan ITSA</td>
									</tr> -->
								</tbody>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>