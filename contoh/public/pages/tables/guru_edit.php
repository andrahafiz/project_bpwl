<?php
include "pages/set/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
    <script>
        function tampilkanPreview(gambar, idpreview) {
            //                membuat objek gambar
            var gb = gambar.files;

            //                loop untuk merender gambar
            for (var i = 0; i < gb.length; i++) {
                //                    bikin variabel
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview = document.getElementById(idpreview);
                var reader = new FileReader();

                if (gbPreview.type.match(imageType)) {
                    //                        jika tipe data sesuai
                    preview.file = gbPreview;
                    reader.onload = (function(element) {
                        return function(e) {
                            element.src = e.target.result;
                        };
                    })(preview);
                    //                    membaca data URL gambar
                    reader.readAsDataURL(gbPreview);
                } else {
                    //                        jika tipe data tidak sesuai
                    alert("Type file tidak sesuai. Khusus image.");
                }
            }
        }
    </script>
    <title>Document</title>
</head>

<body>

    <?php
    $nip = $_GET['id'];
    $sql = "SELECT `nip_guru`,`guru_nama`,`photo_guru`,`guru_singkatan`,`guru_pendidikanterakhir`,`guru_jabatan`,`guru_tmptlahir`,`guru_tgllahir`,`guru_alamat` FROM `guru` WHERE nip_guru='$nip'";
    // echo "$sql";
    include "pages/set/koneksi.php";
    $query = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($query)) {
        // echo "$row[7]";
        ?>

        <div class="card">
            <div class="header">
                <h2>
                    EDIT DATA GURU
                </h2>
            </div>
            <div class="body">
                <form method="post" action="pages/tables/guru_reg_edit.php" enctype="multipart/form-data">


                    <div class="row clearfix">
                        <!-- NIP -->
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="nip_input">NIP</label>
                                    <input type="text" class="form-control" id="nip_input" name="nip1" value="<?php echo "$nip"; ?>" disabled>
                                    <input type="hidden" class="form-control" id="nip_input" name="nip" value="<?php echo "$nip"; ?>">
                                </div>
                            </div>
                        </div>
                        <!-- End NIP -->
                    </div>

                    <div class="row clearfix">
                        <!-- Nama Guru -->
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="nama_input">Nama Guru:</label>
                                    <input type="text" class="form-control" id="nama_input" name="nama" value="<?php echo $row[1] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- End Nama Guru -->


                        <!-- Singkatan Guru -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="singkatan_input">Singkatan Guru:</label>
                                    <input type="text" class="form-control" id="singkatan_input" name="singkatan" value="<?php echo $row[3] ?>">
                                </div>
                            </div>
                        </div>

                        <!-- End Singkatan Guru -->

                    </div>


                    <div class="row clearfix">
                        <!-- Pendidikan Terakhir -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="pendidikan_input">Pendidikan Terakhir</label>
                                <select class="form-control show-tick" tabindex="-98" id="pendidikan_input" name="pendidikan">
                                    <option value=" <?php echo $row[1] ?>"><?php echo $row[4] ?></option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMK/SMK</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                                <!-- </div> -->

                            </div>
                        </div>
                        <!-- End Pendidikan Terakhir -->

                        <!-- Jabatan -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="jabatan_input">Jabatan</label>

                                <select class="form-control show-tick" tabindex="-98" id="jabatan_input" name="jabatan">
                                    <?php
                                    include "pages/set/koneksi.php";
                                    $sql = "SELECT * FROM `jabatan`";
                                    $query = mysqli_query($db, $sql);
                                    while ($rowa = mysqli_fetch_array($query)) {
                                        ?>
                                        <option value='<?php echo $rowa[0] ?>' <?php if ($rowa[0] == $row[5]) {
                                                                                    echo "selected";
                                                                                } ?>> <?php echo $rowa[1] ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <!-- End Jabatan -->
                    </div>


                    <div class="row clearfix">
                        <!-- Tempat Lahir -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="tmplahir_input">Tempat Lahir:</label>
                                    <input type="text" class="form-control" id="tmplahir_input" name="tempat" value="<?php echo $row[6] ?>">
                                </div>
                            </div>
                        </div>
                        <!-- End Tempat Lahir -->

                        <!-- Tangal lahir -->
                        <div class=" col-sm-4">

                            <label for="tgl_input">Tanggal Lahir</label>
                            <div class="input-group date" id="bs_datepicker_component_container">
                                <div class="form-line">
                                    <input type="text" id="tgl_input" name="ttl" class="form-control" value="<?php echo $row[7] ?>">
                                </div>
                                <span class=" input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div></div>
                            </div>
                        </div>
                        <!-- End Tangal lahir -->
                    </div>

                    <div class="row clearfix">
                        <!-- Alamat -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="alamat_input">Alamat</label>
                                    <textarea rows="4" class="form-control no-resize" name="alamat"><?php echo $row[8] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- End Alamat -->
                    </div>



                    <!-- Choose File -->
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="logo">Foto</label>
                                <input type="file" name="file" id="file" onchange="tampilkanPreview(this,'preview')" />
                            </div>
                        </div>
                    </div>



                    <!-- PREVIEW FOTO -->
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <img id="preview" class="img-thumbnail" style="border: 2px solid #ddd" width="320px" src="pages/tables/images/Guru/<?php echo $row[2] ?>" />
                            <p class="help-block">File harus PNG.</p>
                        </div>
                        <!-- END PREVIEW FOTO -->
                    </div>


                    <button type="submit" name="kirim" class="btn btn-success">Submit</button>
            </div>
        <?php
        }
        ?>
    </div>
    </div>
    </div>
    </div>
    </form>
</body>

</html>