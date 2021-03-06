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

    <!-- Latest compiled and minified CSS -->


    <body>


        <div class="card">
            <div class="header">
                <h2>
                    INPUT DATA PENGUMUMAN
                </h2>
            </div>
            <div class="body">
                <form method="post" action="pages/tables/pengumuman_reg.php" enctype="multipart/form-data"> <input type="hidden" name="kode" value="pengumuman">

                    <div class="row clearfix">
                        <!-- Id Pengumuman -->
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="id_input">ID Pengumuman</label>
                                    <input type="text" class="form-control" id="id_input" name="idpengumuman" placeholder="Inputkan ID Pengumuman">
                                </div>
                            </div>
                        </div>
                        <!-- End Id Pengumuman -->
                    </div>

                    <div class="row clearfix">
                        <!-- Judul Pengumuman -->
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="judul_input">Judul Pengumuman</label>
                                    <input type="text" class="form-control" id="judul_input" name="judulpengumuman" placeholder="Inputkan Judul Pengumuman">
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <div class="row clearfix">
                        <!-- Isi Pengumuman -->
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="isi_input">Isi Pengumuman</label>
                                    <input type="text" class="form-control" id="isi_input" name="isipengumuman" placeholder="Inputkan Isi Pengumuman">
                                </div>
                            </div>
                        </div>
                        <!-- End -->
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
                            <img id="preview" class="img-thumbnail" style="border: 2px solid #ddd" width="320px" src="pages/tables/images/Pengumuman/notimage.png" />
                            <p class="help-block">File harus PNG.</p>
                        </div>
                        <!-- END PREVIEW FOTO -->
                    </div>

                    <button type="submit" name="kirim" class="btn btn-success">Submit</button>
            </div>
        </div>
        </div>
        </div>
        </div>
        </form>

    </body>

</html>