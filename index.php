<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="libs/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <title>Uas - Home</title>
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

                    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                        <h1 class="display-4">UAS</h1>
                        <p class="lead">Web aplikasi ini dibuat dalam rangka memenuhi tugas UAS Semester 2. <br>Aplikasi ini adalah implementasi CRUD (Create, Read, Update, Delete) menggunakan PHP dan MySQLi.</p>
                        <p class="lead">Beberapa libraries CSS dan JavaScript yang digunakan: <a href="https://jquery.com/" target="_blank">jQuery</a>, <a href="https://getbootstrap.com/" target="_blank">Bootstrap 4</a>, <a href="https://datatables.net/" target="_blank">Datatables</a>, <a href="https://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank">jQuery Mask</a>.<br>Dataset transkasi penjualan diambil dari <a href="https://www.kaggle.com/" target="_blank"><b>kaggle</b></a> <a href="https://www.kaggle.com/jr2ngb/superstore-data" target="_blank">superstore_data</a>.</p>
                        <p class="lead">Source code bisa didownload di <a href="https://github.com/wanlunxin/uas.git" target="_blank">GitHub</a></p>
                    </div>
                    <!-- <div class="container">
                        <div class="card-deck mb-3 text-center">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">DATA BARANG</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Data kode, nama, tanggal masuk, jumlah dan harga beli barang.</p>
                                    <a href="barang.php" class="btn btn-primary">Lihat data barang</a>
                                </div>
                            </div>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">DATA TRANSAKSI</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Data kode, nama, jumlah, harga beli dan harga jual barang.</p>
                                <a href="transaksi.php" class="btn btn-primary">Lihat data transaksi</a>
                                </div>
                            </div>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">REKAM BARANG</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Tambah data barang baru.</p>
                                    <a href="rekam.php" class="btn btn-primary">Tambah data barang</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
    </body>
</html>