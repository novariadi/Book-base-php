<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH | BOOK BASE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <br>
    <br>
    <div class="container">
        <div id="judul">
            <h1>BOOK BASE</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="bar">
            <a href="index.php">Beranda</a> /
            <a href="tambah.php">Tambah Buku</a>
        </div>
        <br>
        <br>
        <h6>TAMBAH BUKU</h6>
        <div class="row">
            <div class="col-sm-6">
                <form action="proses.php" method="POST">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" required name="judul">
                    </div>
                    <div class="form-group">
                        <label>Pengarang</label>
                        <input type="text" class="form-control" required name="pengarang">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" class="form-control" required name="penerbit">
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="number" class="form-control" required name="tahun">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" required name="submit" value="Tambah">
                        <a href="index.php" class="btn btn-warning">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>