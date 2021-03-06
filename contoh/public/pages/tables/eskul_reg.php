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

    $kode_eskul = $_POST['kodeeskul'];
    $nama_eskul = $_POST['namaeskul'];


    // PERINTAH UPLOAD GAMBAR

    $nama_logo = $_FILES['file']['name'];
    $ukuran_logo = $_FILES['file']['size'];
    $tipe_logo = $_FILES['file']['type'];
    $tmpname_logo = $_FILES['file']['tmp_name'];
    $lokasi = "images/Ekstrakulikuler/";
    $uploadstatus = 1;
    $ekst_file = strtolower(pathinfo($lokasi . $nama_logo, PATHINFO_EXTENSION));
    $test = $tipe_logo . $nama_logo;


    //mengecek file logo sudah ada di folder atau belum
    if (file_exists($test)) {
        echo "<script>alert('File sudah ada');</script>";
        $uploadstatus = 0;
    }

    if (move_uploaded_file($tmpname_logo, $lokasi . $nama_logo)) {


        if ($ukuran_logo > 1000000) {
            echo "<script>alert('Harus di bawah 10 MB');</script>";
            $uploadstatus = 0;
        }

        if ($uploadstatus == 0) {
            echo "<script> alert('Gagal Upload');</script>";
        } else {
            /*------------------EKSEKUSI--------------- */

            //upload ke tabel ukm
            $query2 = "INSERT INTO `eskul` (`kode_eskul`, `nama_eskul`, `foto_eskul`) 
                        VALUES ('$kode_eskul', '$nama_eskul', '$nama_logo')";


            //upload ke tabel images
            $sql_foto = "insert into images( nama, ukuran, tipe, lokasi, status ) VALUES ( '$nama_logo','$ukuran_logo','$tipe_logo','$lokasi',NULL)";

            mysqli_query($db, $query2);

            $query = mysqli_query($db, $sql_foto);
            if (!$query) {
                //Jika Gagal
                echo "YAPS";
            } else {
                echo "<script>alert('Insert Data $nama Berhasil'); window.location.href = '../../index.php?slink=pages/tables/eskul_data.php&status=succes_add';1</script>";
            }
        }
    } else {
        echo "<script>alert('Gagal Upload Foto'); </script>";
    }
    ?>
</body>

</html>