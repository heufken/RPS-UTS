<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RPS Online</title>
  <link rel="icon" href="pic/icon-amikom.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<style>
  body {
    height: 100vh;
  }
</style>

<?php
if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "gagal"){
    echo "Login gagal! Username dan password salah!";
  }else if($_GET['pesan'] == "logout"){
    echo "Anda telah berhasil logout";
  }else if($_GET['pesan'] == "belum_login"){
    echo "Anda harus login untuk mengakses halaman admin";
  }
}
?>


<body d-flex justify-content-between>
  <div class="bg-login">
    <img src="pic/logo_amikom.png" class="img-login">
    <div class="textlogin">Halaman Login</div>
    <br>
    <form action="controller-login.php" method="POST">
      <div class="mb-3 mt-3">
        <input type="text" class="form-control" id="user" placeholder="Masukkan Username" name="user">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
      </div>
      <div class="input-group mb-5 d-flex justify-content-between">
      </div>
      <button type="submit" class="btn btn-warning col-md-12 mb-3">Login</button>
      
    </form>
    <p class="text-center"> atau </p>
    <a href="register.php">
    <button type="submit" class="btn btn-warning col-md-12 mb-3">Register</button>
    </a>
  </div>
</body>
</html>