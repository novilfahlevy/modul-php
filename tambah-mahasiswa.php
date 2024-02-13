<?php

require 'koneksi.php';

if (isset($_POST['submit'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $mataKuliah = $_POST['mata_kuliah'];

  $sql = "INSERT INTO
    mahasiswa (nim, nama, mata_kuliah)
    VALUES ('$nim', '$nama', '$mataKuliah')";
  
  $result = mysqli_query($koneksi, $sql);

  if ($result == true) {
    echo "<script>alert('Data berhasil ditambah')</script>";
    echo "<script>window.location.href = '/modul-php/mahasiswa.php'</script>";
  } else {
    echo "<script>alert('Gagal menambah data')</script>";
    echo "<script>window.location.reload()</script>";
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
      <h1 class="fs-3 mb-3">Tambah Mahasiswa</h1>
      <form action="tambah-mahasiswa.php" method="POST">
        <div class="form-floating mb-3">
          <input type="text" name="nim" id="nim" class="form-control">
          <label for="nim">NIM</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="nama" class="form-control">
          <label for="nama">Nama</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="mata_kuliah" class="form-control">
          <label for="mata_kuliah">Mata Kuliah</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>