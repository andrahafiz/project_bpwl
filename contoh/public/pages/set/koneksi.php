<?php
$server="localhost";
$user="root";
$password="";
$nama_database="project_bpwl";

$db=mysqli_connect($server,$user,$password,$nama_database);
if (!$db) {
	# code...
	die("Gagal Terhubung dengan database:" . mysqli_connect_error());}
// }else{
// 	die("ANDA BERHASIL");
// }