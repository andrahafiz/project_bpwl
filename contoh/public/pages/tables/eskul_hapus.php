<?php
include "pages/set/koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM `eskul` WHERE `eskul`.`kode_eskul` = '$id'";
echo $sql;
$result =  mysqli_query($db, $sql);
if ($result == 1) {
   echo "<script>
   alert('Data dengan Kode Ekstrakulikuler  $id di Hapus');
   window.location.assign('index.php?slink=pages/tables/eskul_data.php&status=succes_delete');
   </script>";
} else {
   echo "<script>window.location.assign('index.php?slink=pages/tables/eskul_data.php&status=failed_delete');</script>";
}
