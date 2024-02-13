<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'coba-php';

// Buat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$koneksi) {
  die('Koneksi gagal: ' . mysqli_connect_error());
}

echo 'Koneksi berhasil';