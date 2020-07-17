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
        <link rel="stylesheet" type="text/css" href="libs/buttons.dataTables.min.css">

        <title>Uas -  Transaksi</title>
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
                    <span class="navbar-text"><a href="https://github.com/wanlunxin/uas" target="_blank"><img src="images/github-filled.svg"></a></span>
                </div>
            </nav>
        </header>
        <div class="container">
            <main>
                <div class="row">
                    <div class="col-12 mr-auto ml-auto">
                        <div class="bd-callout bd-callout-warning pb-2 pt-2 mb-4">
                            <h5 id="conveying-meaning-to-assistive-technologies mt-4 mb-4">Data transaksi</h5>
                        </div>
                        <table id="datatransaksi" class="table table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga Awal</th>
                                    <th>Harga Jual</th>
                                </tr>
                            </thead>
                        </table>
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

        <script src="libs/jquery.dataTables.min.js"></script>
        <script src="libs/dataTables.bootstrap4.min.js"></script>
        <script src="libs/dataTables.buttons.min.js"></script>
        

        <script>
            $(document).ready(function() {
                $('#datatransaksi').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                    "pageLength": 5,
                    "responsive": true,
                    "language": {
                        "url": "id.json"
                    },
                    "ajax": {
                        url: "proses.php",
                        type: "post",
                        data: function(d) {
                            d.action = 'datatransaksi'
                        }
                    },
                });
            } );
        </script>
    </body>
</html>





