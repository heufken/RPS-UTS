<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Halaman Admin</title>
  <link rel="icon" href="pic/icon-amikom.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<style>
  body {
    font-family: Helvetica, sans-serif;
  }

  .navbar-text {
    font-family: Helvetica, sans-serif;
    font-weight: bold;
    color: white;
  }

  .box {
    width: 1200px;
    padding: 30px;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: auto;
    margin-top: 40px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-column-gap: 20px;
  }

  .box-content {
    font-family: Helvetica, sans-serif;
    font-size: 14px;
  }

  .box-content.greeting {
    margin-left: 10px;
  }

  .box-content.profile {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .box-content.profile img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .box-content.buttons {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10px;
  }

  .box-button1,
  .box-button2,
  .box-button3 {
    width: 120px;
    height: 40px;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    background-color: #ffbf35;
    color: #000000;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-bottom: 10px;
  }

  .nav-tabs .nav-link {
    background-color: #ffbf35;
    color: #000000;
  }

  .nav-tabs .nav-link.active {
    background-color: #c79b3b;
    border-bottom: 2px solid #000000;
  }

  /* .card {
    border-color: #959595;
  } */

  .card {
    display: flex;
    flex-direction: column;
  }

  @media (max-width: 768px) {
    .card {
      margin-bottom: 20px;
    }
  }

  .card-body {
    background-color: #7930A5;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  .card-header {
    background-color: #51236e;
    font-weight: bold;
    font-size: 18px;
  }

  .row {
    margin-right: 20px;
  }
</style>


<body>
  <nav class="navbar sticky-top" style="background-color: #7930A5;">

    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand" href="#">
        <img src="pic/logo-amikom.png" alt="Logo" width="150" height="50" class="d-inline-block align-text-top">
      </a>

      <span class="navbar-text">
        Halaman Admin
      </span>

      <a href="logout.php">
        <button type="submit" class="btn btn-warning ms-auto">Logout</button>
      </a>
    </div>

  </nav>

  <div class="box">
    <div class="box-content profile">
      <img src="pic/logo.png" alt="Gambar">
    </div>
    <div class="box-content greeting">
      <h4>Halo, Fahmi.</h4>
      <p>Fahmi Muhammad Hanif<br>22.01.4842</p>
    </div>
    <div class="box-content buttons">
      <a href="tambahdosen.php">
        <button class="box-button1">Tambah RPS</button>
      </a>
      <a href="view.php">
        <button class="box-button2">Daftar RPS</button>
      </a>
    </div>
  </div>
  <br>
  <br>
  <div class="container-fluid mx-3">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
          role="tab" aria-controls="nav-home" aria-selected="true">RPS Terkini</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <div class="row">
          <!-- <div class="col"> -->
          <?php
          include("config.php");

          $sql = "SELECT kode_matkul, nama_matkul FROM matkul ORDER BY created_at DESC LIMIT 4";
          $query = mysqli_query($sambung, $sql);

          while ($row = mysqli_fetch_array($query)) {
            echo '<div class="col">
            <div class="card text-bg-secondary mb-4 mt-4">
              <div class="card-header">' . $row['kode_matkul'] . '</div>
              <div class="card-body">
                <h5 class="card-title" style="color: #FFFFFF;">' . $row['nama_matkul'] . '</h5>
                <a href="materi.php?kode_matkul=' . $row['kode_matkul'] . '" class="btn btn-warning ml-5">Detail</a>
              </div>
            </div>
          </div>';
          }
          ?>

          <!-- <div class="card text-bg-secondary mb-4 mt-4">
              <div class="card-header">Kode Mata Kuliah #1</div>
              <div class="card-body">
                <h5 class="card-title" style="color: #FFFFFF;">Nama Mata Kuliah #1</h5>
                <a href="view/index.html" class="btn btn-warning ml-5">Detail</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-secondary mb-4 mt-4">
              <div class="card-header">Kode Mata Kuliah #1</div>
              <div class="card-body">
                <h5 class="card-title" style="color: #FFFFFF;">Nama Mata Kuliah #1</h5>
                <a href="view/index.html" class="btn btn-warning ml-5">Detail</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-secondary mb-4 mt-4">
              <div class="card-header">Kode Mata Kuliah #1</div>
              <div class="card-body">
                <h5 class="card-title" style="color: #FFFFFF;">Nama Mata Kuliah #1</h5>
                <a href="view/index.html" class="btn btn-warning ml-5">Detail</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-bg-secondary mb-4 mt-4">
              <div class="card-header">Kode Mata Kuliah #1</div>
              <div class="card-body">
                <h5 class="card-title" style="color: #FFFFFF;">Nama Mata Kuliah #1</h5>
                <button type="button" class="btn btn-warning ml-5">Detail</a>
              </div>
            </div>
          </div> -->

          <script src="bootstrap/js/bootstrap.js"></script>
          <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>