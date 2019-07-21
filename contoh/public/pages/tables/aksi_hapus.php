<?php
include "pages/set/koneksi.php";
$nip = $_GET['id'];
$sql = "DELETE FROM `guru` WHERE `guru`.`nip_guru` = '$nip'";
echo $sql;
$result =  mysqli_query($db, $sql);
if ($result == 1) {
   echo "<script>
   alert('Data dengan NIP  $nip di Hapus');
   window.location.assign('index.php?slink=pages/tables/guru_data.php&status=succes_delete');
   </script>";
} else {
   echo "<script>window.location.assign('index.php?slink=pages/tables/guru_data.php&status=failed_delete');</script>";
}
