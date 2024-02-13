<?php

require 'koneksi.php';

// edit data mahasiswa
if (isset($_POST['submit'])) {
  $nimParam = $_GET['nim']; // ambil nim dari URL

  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $mataKuliah = $_POST['mata_kuliah'];

  $sql = "UPDATE mahasiswa
          SET nim = '$nim', nama = '$nama', mata_kuliah = '$mataKuliah'
          WHERE nim = '$nimParam'";
  
  $result = mysqli_query($koneksi, $sql);

  if ($result == true) {
    echo "<script>alert('Data berhasil diedit')</script>";
    echo "<script>window.location.href = '/modul-php/mahasiswa.php'</script>";
  } else {
    echo "<script>alert('Gagal mengedit data')</script>";
    echo "<script>window.location.reload()</script>";
  }
}

// ambil data mahasiswa
if (isset($_GET['nim'])) {
  $nimParam = $_GET['nim']; // ambil nim dari URL
  $sql = "SELECT * FROM mahasiswa WHERE nim = '$nimParam'";
  $result = mysqli_query($koneksi, $sql);

  if (mysqli_num_rows($result) > 0) {
    $mahasiswa = mysqli_fetch_assoc($result);
  } else {
    echo "<script>alert('Mahasiswa tidak ditemukan')</script>";
    echo "<script>window.location.href = '/modul-php/mahasiswa.php'</script>";
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
      <h1 class="fs-3 mb-3">Edit Mahasiswa</h1>
      <form action="edit-mahasiswa.php?nim=<?= $mahasiswa['nim']; ?>" method="POST">
        <div class="form-floating mb-3">
          <input type="text" name="nim" id="nim" class="form-control" value="<?= $mahasiswa['nim']; ?>">
          <label for="nim">NIM</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="nama" class="form-control" value="<?= $mahasiswa['nama']; ?>">
          <label for="nama">Nama</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="mata_kuliah" class="form-control" value="<?= $mahasiswa['mata_kuliah']; ?>">
          <label for="mata_kuliah">Mata Kuliah</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>