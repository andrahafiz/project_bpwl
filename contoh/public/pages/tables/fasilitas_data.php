<!DOCTYPE html>
<html>

<head>
    <title>Data Fasilitas </title>


</head>

<body>

    <?php
    error_reporting(0);
    if ($_GET['status'] == "succes_edit") {
        echo "
        <div class='alert alert-success'>
            <strong>Sukses!</strong> Anda berhasil mengubah data.
        </div>";
    }
    if ($_GET['status'] == "succes_add") {
        echo "
        <div class='alert alert-success'>
            <strong>Sukses!</strong> Anda berhasil menambah data.
        </div>";
    }
    if ($_GET['status'] == "succes_delete") {
        echo "
        <div class='alert alert-success'>
            <strong>Sukses!</strong> Anda berhasil menghapus data.
        </div>";
    }
    if ($_GET['status'] == "failed_edit" || $_GET['status'] == "failed_delete") {
        echo "
        <div class='alert alert-danger'>
            <strong>Oh Anda Gagal!</strong> Mungkin terdapat kesalahan, Coba Lagi.
        </div>";
    }

    ?>


    <!-- Striped Rows -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Data Fasilitas
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-striped" sty>

                        <thead>
                            <tr>
                                <th>Nomor Urut</th>
                                <th>ID Fasilitas</th>
                                <th>Nama Fasilitas</th>
                                <th>Foto Fasilitas</th>
                                <th class="align-center">Aksi</th>
                            </tr>
                        </thead>
                        <script>
                            swal("Are you sure?", {
                                dangerMode: true,
                                buttons: true,
                                if (button == 'true')
                            });
                        </script>
                        <tbody>
                            <?php

                            include "pages/set/koneksi.php";
                            $sql = "SELECT `id_fasilitas`,`nama_fasilitas`,`foto_fasilitas` FROM `fasilitas`";
                            $query = mysqli_query($db, $sql);
                            $nourut = 1;
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <th class="align-center" scope="row"><?php echo "" . $nourut++; ?></th>
                                    <td> <?php echo "$row[0]"; ?> </td>
                                    <td> <?php echo "$row[1]"; ?>
                                    <td> <img src="pages/tables/images/Fasilitas/<?php echo "$row[2]"; ?> " alt="Logo <?php echo "$row[2]"; ?> " class="img-thumbnail" width=100px"></td>
                                    <td colspan="2" class="align-center">
                                       <a href="index.php?slink=pages/tables/fasilitas_hapus.php&id=<?php echo $row[0] ?>">
                                            <button type="button" class="btn bg-red waves-effect">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                            <?php } ?>

                        </tbody>

                    </table>
                </div>
            </div>

            <!-- #END# Striped Rows -->
            </section>

</body>

</html>