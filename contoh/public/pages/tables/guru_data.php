<!DOCTYPE html>
<html>

<head>
    <title>Data Guru </title>


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
                        Data Pegawai / Guru
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-striped" sty>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Guru (Singkatan)</th>
                                <th>Jabatan</th>
                                <th>Pas Photo</th>
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
                            $sql = "SELECT `nip_guru`,`guru_nama`,`photo_guru`,`guru_singkatan`,`guru_alamat`,`guru_jabatan`,`jabatan_nama` FROM `guru`,`jabatan` WHERE guru_jabatan=jabatan_id";
                            $query = mysqli_query($db, $sql);
                            $nourut = 1;
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <th class="align-center" scope="row"><?php echo "" . $nourut++; ?></th>
                                    <td> <?php echo "$row[0]"; ?> </td>
                                    <td> <?php echo "$row[1]"; ?> ( <b> <?php echo "$row[3]"; ?> </b> )</td>
                                    <td> <?php echo "$row[6]"; ?> </td>
                                    <td> <img src="pages/tables/images/Guru/<?php echo "$row[2]"; ?> " alt="Logo <?php echo "$row[2]"; ?> " class="img-thumbnail" width=100px"></td>
                                    <td colspan="2" class="align-center">
                                        <a href="index.php?slink=pages/tables/guru_edit.php&id=<?php echo $row[0] ?>">
                                            <button type="button" class="btn bg-blue waves-effect">
                                                <i class="material-icons">edit</i>
                                            </button>
                                        </a>
                                        <a href="index.php?slink=pages/tables/aksi_hapus.php&id=<?php echo $row[0] ?>">
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