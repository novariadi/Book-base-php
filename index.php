<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | BOOK BASE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css" />


</head>

<body>
    <br>
    <br>
    <div class="container">
        <div id="judul">
            <h1>BOOK BASE</h1>
        </div>
    </div>
    <br>
    <br>

    <div class="container-fluid">
        <div>
            <a href="index.php">Beranda</a>
        </div>
        <br>
        <br>

        <!-- table -->
        <table id="example" class="display" style="width:100%">
            <thead>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Opsi</th>
            </thead>
            <tbody>
                <?php
                require 'library.php';
                $buku = new Library();
                $no = 1;
                $show = $buku->showBook();
                while ($data = $show->fetch(PDO::FETCH_OBJ)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data->judul; ?></td>
                        <td><?php echo $data->pengarang; ?></td>
                        <td><?php echo $data->penerbit; ?></td>
                        <td><?php echo $data->tahun; ?></td>
                        <td>
                            <a href="edit.php?kode=<?php echo $data->id; ?>" class="btn btn-success">EDIT</a>
                            <a href="proses.php?id=<?php echo $data->id; ?>" class="btn btn-danger">DELETE</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <a href="tambah.php" class="btn btn-primary">Tambah Buku</a>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>