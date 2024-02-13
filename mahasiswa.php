<?php

require 'koneksi.php';

$sql = 'SELECT * FROM mahasiswa';
$result = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
      <h1 class="fs-3 mb-3">Daftar Mahasiswa</h1>
      <a href="tambah-mahasiswa.php" class="btn btn-primary mb-3">+ Tambah data</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while($mahasiswa = mysqli_fetch_assoc($result)): ?>
              <tr>
                <th>1</th>
                <td><?= $mahasiswa['nim']; ?></td>
                <td><?= $mahasiswa['nama']; ?></td>
                <td><?= $mahasiswa['mata_kuliah']; ?></td>
                <td>
                  <a href="edit-mahasiswa.php?nim=<?= $mahasiswa['nim']; ?>">Edit</a>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>