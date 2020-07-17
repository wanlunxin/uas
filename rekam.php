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

        <title>Uas - Rekam</title>
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
                        <!-- <h5 class="card-header mt-4 mb-4 d-inline-block">Rekam barang</h5> -->
                        <div class="bd-callout bd-callout-warning pb-2 pt-2 mb-4">
                            <h5 id="conveying-meaning-to-assistive-technologies mt-4 mb-4">Tambah barang</h5>
                        </div>
                        <form method="post" action="proses.php" class="border p-4">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-12 col-md-2">
                                    <input type="text" class="form-control" name="kode_barang">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Barang</label>
                                <div class="col-sm-5 col-sm-5">
                                    <input type="text" class="form-control" name="nama_barang">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Tgl. masuk</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="tanggal_masuk" placeholder="DD/MM/YYYY">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="jumlah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Harga awal</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="harga_awal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Harga jual</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="harga_jual">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                                <div class="col-auto">
                                    <input type="hidden" name="action" value="rekam">
                                    <button type="submit" value="Rekam" class="btn btn-primary mb-2">Tambah</button>
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

                $('#example').DataTable({
                    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                    "pageLength": 5,
                    "responsive": true,
                    "columnDefs": [
                        {
                            "targets": 7,
                            // "data": null,
                            "defaultContent": null,
                            "orderable": false,
                            "width": "120",
                            "autoWidth": false,
                            render: function(data, type, row, meta) {
                                return type === 'display' ?
                                '<a type="button" class="btn btn-success btn-sm detail" href="edit.php?action=edit&id='+ row[7] +'">Ubah</a> <a type="button" class="btn btn-danger btn-sm hapus" href="edit.php?action=edit&id='+ row[7] +'">Hapus</a>' :
                                data;
                            }
                        },
                        {
                            "className": "dt-center", "targets": [7]
                        },
                    ]
                });
            } );
        </script>
    </body>
</html>