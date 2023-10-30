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

<body d-flex justify-content-between>
  <div class="bg-login">
    <img src="pic/logo_amikom.png" class="img-login">
    <div class="textlogin">Register</div>
    <br>
    <form action="controller-register.php" method="POST">
    <div class="mb-3 mt-3">
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
      </div>
      <div class="mb-3 mt-3">
        <input type="text" class="form-control" id="user" placeholder="Masukkan Username" name="user">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
      </div>
      <div class="input-group mb-5 d-flex justify-content-between">
      </div>
      <button type="submit" class="btn btn-warning col-md-12 mb-3">Register</button>
    </form>
    <p class="text-center"> atau </p>
    <a href="index.php">
    <button type="submit" class="btn btn-warning col-md-12 mb-3">Login</button>
    </a>
  </div>
</body>
</html>