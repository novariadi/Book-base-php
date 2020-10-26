<?php
require 'library.php';
$buku = new Library();

// proses input
if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];


    $add = $buku->addBook($judul, $pengarang, $penerbit, $tahun);

    if ($add == 'Success') {
        header('location:index.php');
    } else {
        echo 'eror';
    }
}

// proses edit
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    $update = $buku->updateBook($id, $judul, $pengarang, $penerbit, $tahun);

    if ($update == 'Success') {
        header('location:index.php');
    } else {
        echo 'eror';
    }
}

// proses hapus

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $buku->deleteBook($id);
    header('location:index.php');
} else {
    echo 'error';
}
