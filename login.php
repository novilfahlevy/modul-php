<?php

session_start();

if (isset($_SESSION['sudah_login'])) {
  header('Location: mahasiswa.php');
  exit;
}

require 'koneksi.php';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($koneksi, $sql);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['sudah_login'] = true;

    header('Location: mahasiswa.php');
    exit;
  } else {
    echo "<script>alert('Email atau password tidak tepat')</script>";
    echo "<script>window.location.reload()</script>";
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-lg-4">
          <div class="card card-body">
            <h1 class="fs-3 mb-3 text-center">Login</h1>
            <form action="login.php" method="POST">
              <div class="form-floating mb-3">
                <input type="email" name="email" id="email" class="form-control">
                <label for="email">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control">
                <label for="password">Password</label>
              </div>
              <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>