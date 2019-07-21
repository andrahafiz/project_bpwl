<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php
    $nip = $_GET['id'];
    ?>
    <script>
        alert('Insert Data <?php echo $nip ?> Berhasil');
        // window class = "location assig" = '../../index.php?slink=pages/tables/guru_data.php';
        window.location.assign("index.php?slink=pages/tables/aksi_hapus.php");
    </script>
</body>

</html>