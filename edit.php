<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="libs/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="libs/dataTables.bootstrap4.min.css">

        <title>Uas - Edit</title>
    </head>
    <body>
        <header class="bg-dark">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/hosted-graphite.svg">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">HOME 
                            <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="barang.php">BARANG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transaksi.php">TRANSAKSI</a>
                        </li>
                    </ul>
                    <span class="navbar-text"><a href="https://github.com/wanlunxin/uas.git" target="_blank"><img src="images/github-filled.svg"></a></span>
                </div>
            </nav>
        </header>
        <div class="container">
            <main>
                <div class="row">
                    <div class="col-11 mr-auto ml-auto">
                        <div class="bd-callout bd-callout-warning pb-2 pt-2 mb-4">
                            <h5 id="conveying-meaning-to-assistive-technologies mt-4 mb-4">Rekam barang</h5>
                        </div>
                        <?php 

                        require_once('koneksi.php');

                        $id = $_GET['id'];

                        $query = mysqli_query($koneksi, "SELECT * FROM toko WHERE id = '$id'");

                        $data = [];
                        while ($d = mysqli_fetch_assoc($query)) {
                            $data[] = $d;
                        }

                        $d2 = explode('-', $data[0]['tanggal_masuk']);
                        $tanggal_masuk = $d2[2] . '/' . $d2[1] . '/' . $d2[0];

                        ?>
                        <form method="post" action="proses.php" class="border p-4">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-12 col-md-2">
                                    <input type="text" class="form-control" name="kode_barang" value="<?php echo $data[0]['kode_barang']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Barang</label>
                                <div class="col-sm-5 col-sm-5">
                                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $data[0]['nama_barang']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Tgl. masuk</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="tanggal_masuk" value="<?php echo $tanggal_masuk; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="jumlah" value="<?php echo $data[0]['jumlah']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Harga awal</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="harga_awal" value="<?php echo $data[0]['harga_awal']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Harga jual</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="harga_jual" value="<?php echo $data[0]['harga_jual']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                                <div class="col-auto">
                                    <input type="hidden" name="action" value="edit">
                                    <input type="hidden" name="id" value="<?php echo $data[0]['id']; ?>">
                                    <button type="submit" value="Rekam" class="btn btn-primary mb-2">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </main>
        </div>

        <footer class="container mt-4 mb-4 border-top pt-4">
            <p>&copy; 2020 - <a href="index.php">Uas_Setiadi_TI19MSE</a><p>
        </footer>

        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="libs/jquery.min.js"></script>
        <script src="libs/popper.min.js"></script>
        <script src="libs/bootstrap.min.js"></script>
        <script src="libs/jquery.mask.min.js"></script>

        <script src="libs/jquery.dataTables.min.js"></script>
        <script src="libs/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function() {
                $('input[name="tanggal_masuk"]').mask('00/00/0000');
            } );
        </script>
    </body>
</html>