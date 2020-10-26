<?php

class Library
{
  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=bukudb', 'root', '');
  }

  public function addBook($judul, $pengarang, $penerbit, $tahun)
  {

    $sql = "INSERT INTO buku (judul, pengarang, penerbit, tahun) VALUES ('$judul', '$pengarang', '$penerbit', '$tahun')";
    $query = $this->db->query($sql);

    if ($query) {
      return 'Success';
    } else {
      return 'Error';
    }
  }

  public function showBook()
  {
    $sql = "SELECT * FROM buku";
    $query = $this->db->query($sql);
    return $query;
  }

  public function editBook($id)
  {
    $sql = "SELECT * FROM buku WHERE id='$id'";
    $query = $this->db->query($sql);
    return $query;
  }

  public function updateBook($id, $judul, $pengarang, $penerbit, $tahun)
  {
    $sql = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit', tahun='$tahun' WHERE id = '$id' ";
    $query = $this->db->query($sql);
    if ($query) {
      return 'Success';
    } else {
      return 'Erorr';
    }
  }

  public function deleteBook($kode)
  {
    $sql = "DELETE FROM buku WHERE id = '$kode' ";
    $query = $this->db->query($sql);
    return $query;
  }
}
