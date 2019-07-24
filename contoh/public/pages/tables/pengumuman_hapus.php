<?php
include "pages/set/koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM `pengumuman` WHERE `pengumuman`.`id_pengumuman` = '$id'";
echo $sql;
$result =  mysqli_query($db, $sql);
if ($result == 1) {
   echo "<script>
   alert('Data dengan ID Pengumuman  $id di Hapus');
   window.location.assign('index.php?slink=pages/tables/pengumuman_data.php&status=succes_delete');
   </script>";
} else {
   echo "<script>window.location.assign('index.php?slink=pages/tables/pengumuman_data.php&status=failed_delete');</script>";
}
