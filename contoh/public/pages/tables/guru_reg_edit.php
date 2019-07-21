<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- CSS BUATAN SENDIRI -->
    <link rel="stylesheet" href="style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart 
        Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "../set/koneksi.php";

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $singkatan = $_POST['singkatan'];
    $pendidikan = $_POST['pendidikan'];
    $jabatan = $_POST['jabatan'];
    $tempat = $_POST['tempat'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    echo "INI NIP $nip";


    // PERINTAH UPLOAD GAMBAR

    $nama_logo = $_FILES['file']['name'];
    $ukuran_logo = $_FILES['file']['size'];
    $tipe_logo = $_FILES['file']['type'];
    $tmpname_logo = $_FILES['file']['tmp_name'];
    $lokasi = "images/Guru/";
    // echo "$lokasi";
    $uploadstatus = 1;
    $ekst_file = strtolower(pathinfo($lokasi . $nama_logo, PATHINFO_EXTENSION));
    // $test = $lokasi . $nama_logo;
    $test = $tipe_logo . $nama_logo;



    //mengecek file logo sudah ada di folder atau belum
    $select = "SELECT photo_guru FROM `guru` WHERE nip_guru='$nip' ";
    // echo $select;
    $result = mysqli_query($db, $select);
    $row = mysqli_fetch_assoc($result);
    // echo $row['photo_guru'];

    if ($nama_logo) {
        //Jika logo di tukar
        $foto = $nama_logo;
        // echo "$foto<br>";
        if (move_uploaded_file($tmpname_logo, $lokasi . $nama_logo)) {
            $sql_upload2 = "INSERT INTO images( nama, ukuran, tipe, lokasi) VALUES ( '$nama_logo','$ukuran_logo','$tipe_logo','$lokasi')";
            mysqli_query($db, $sql_upload2);
            // echo "<br>$sql_upload2";/*  */
        }
    } else {
        //jika logo tidak di tukar
        $foto = $row['photo_guru'];
        // echo "$foto";
    }
    $sql = "UPDATE `guru` SET `nip_guru`='$nip',`guru_nama`='$nama',`photo_guru`='$foto',`guru_singkatan`='$singkatan',`guru_pendidikanterakhir`='$pendidikan',`guru_jabatan`='$jabatan',`guru_tmptlahir`='$tempat',`guru_tgllahir`='$ttl',`guru_alamat`='$alamat' WHERE nip_guru='$nip'";
    // echo $sql;
    $hasil = mysqli_query($db, $sql);
    if ($hasil) {
        header("location:../../index.php?slink=pages/tables/guru_data.php&status=succes_edit");
    } else {
        header("location:../../index.php?slink=pages/tables/guru_daftar.php&status=failed_edit");
    }
    ?>
</body>

</html>