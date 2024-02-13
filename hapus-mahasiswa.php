<?php

session_start();

if (!isset($_SESSION['sudah_login'])) {
  header('Location: login.php');
  exit;
}

require 'koneksi.php';

if (isset($_GET['nim'])) {
  $nimParam = $_GET['nim']; // ambil nim dari URL

  $sql = "DELETE FROM mahasiswa WHERE nim = '$nimParam'";
  $result = mysqli_query($koneksi, $sql);

  if ($result == true) {
    echo "<script>alert('Data berhasil dihapus')</script>";
  } else {
    echo "<script>alert('Gagal menghapus data')</script>";
  }

  echo "<script>window.location.href = '/modul-php/mahasiswa.php'</script>";
}

