<?php

if (isset($_GET['email']) && isset($_GET['pertanyaan'])) {
  $email = $_GET['email'];
  $pertanyaan = $_GET['pertanyaan'];

  $_SESSION['pernah_bertanya'] = true;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Belajar PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">Praktisi SI Unmul</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mata Kuliah</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Anggota
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Dasar-dasar Pemrograman</a></li>
                <li><a class="dropdown-item" href="#">Algoritma dan Struktur Data</a></li>
                <li><a class="dropdown-item" href="#">Desain Basis Data</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <img src="gambar/banner.jpg" class="img-fluid" alt="Make something reat">

    <div class="alert alert-info mt-3" role="alert">
      <div class="container">
        <h4 class="alert-heading">Info!</h4>
        <p class="mb-0" id="informasi">Praktikum akan dimulai pada minggu ketiga setelah perkuliahan dimulai yaitu 12 Februari 2024.</p>
      </div>
    </div>

    <div class="container mb-5">
      <div class="row">
        <div class="col-4">
          <div class="card">
            <img src="gambar/basic-programming.jpg" class="img-thumbnail" alt="Dasar-dasar Pemrograman">
            <div class="card-body">
              <h5 class="card-title fs-2">Dasar-dasar Pemrograman</h5>
              <h6 class="card-subtitle mb-2 text-muted">DDP</h6>
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#matkulModal">
                Lihat
              </button>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="gambar/data-structure.png" class="img-thumbnail" alt="Algoritma dan Struktur Data">
            <div class="card-body">
              <h5 class="card-title fs-2">Algoritma dan Struktur Data</h5>
              <h6 class="card-subtitle mb-2 text-muted">ASD</h6>
              <a href="#" class="btn btn-success">Lihat</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="gambar/database-design.png" class="img-thumbnail" alt="Desain Basis Data">
            <div class="card-body">
              <h5 class="card-title fs-2">Desain Basis Data</h5>
              <h6 class="card-subtitle mb-2 text-muted">DBD</h6>
              <a href="#" class="btn btn-success">Lihat</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="matkulModal" tabindex="-1" aria-labelledby="matkulModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="matkulModalLabel">Dasar-dasar Pemrograman</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <b>Dasar-dasar pemrograman</b> mempelejari tentang bahasa pemrograman Python dan materi dasar tentang pemrograman seperti variabel, condition, looping, function, dan lain-lain.
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-5">
      <div id="carouselExampleControls" class="carousel slide w-50" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="gambar/basic-programming.jpg" class="d-block w-100 rounded">
          </div>
          <div class="carousel-item">
            <img src="gambar/data-structure.png" class="d-block w-100 rounded">
          </div>
          <div class="carousel-item">
            <img src="gambar/database-design.png" class="d-block w-100 rounded">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="container mb-5">
      <?php if (isset($_SESSION['pernah_bertanya'])): ?>
        <h2>Izin bertanya lagi</h2>
      <?php else: ?>
        <h2>Izin bertanya</h2>
      <?php endif; ?>
      <hr>
      <form action="index.php" method="GET" id="formPertanyaan">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com">
        </div>
        <div class="mb-3">
          <label for="question" class="form-label">Pertanyaan</label>
          <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="index.js"></script>
  </body>
</html>