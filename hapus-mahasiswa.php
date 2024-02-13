<?php

session_start();

// cek 'ingat saya' dulu
// kalau ingat, tambahkan sudah_login di Session
if (isset($_COOKIE['ingat_saya'])) {
  $_SESSION['sudah_login'] = true;
}

// cek session login
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

