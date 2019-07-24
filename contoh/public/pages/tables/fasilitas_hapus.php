<?php
include "pages/set/koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM `fasilitas` WHERE `fasilitas`.`id_fasilitas` = '$id'";
echo $sql;
$result =  mysqli_query($db, $sql);
if ($result == 1) {
   echo "<script>
   alert('Data dengan ID Fasilitas  $id di Hapus');
   window.location.assign('index.php?slink=pages/tables/fasilitas_data.php&status=succes_delete');
   </script>";
} else {
   echo "<script>window.location.assign('index.php?slink=pages/tables/fasilitas_data.php&status=failed_delete');</script>";
}
