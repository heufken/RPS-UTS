<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Halaman Admin</title>
  <link rel="icon" href="pic/icon-amikom.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<?php
//require_once("../auth.php");
include("config.php");


// if( !isset($_POST['nik']) ){
// // kalau tidak ada nik di query string
// header('Location: ../view/dosen.php');
// }

//deklarasikan variabel $nik dari nik
$id = $_GET['kode_matkul'];

// buat query untuk ambil data dari database
$sql = mysqli_query($sambung, "SELECT * FROM matkul WHERE kode_matkul = '$id'");

// $query = mysqli_query($sambung, $sql);
$matkul = mysqli_fetch_assoc($sql);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
  die("data tidak ditemukan...");
}
?>

<style>
  body {
    font-family: Helvetica, sans-serif;
  }

  .navbar-text {
    font-family: Helvetica, sans-serif;
    font-weight: bold;
    color: white;
  }

  .floating-button-container {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 100%; /* Lebar penuh */
    max-width: 7680px; /* Lebar maksimal (opsional) */
    background-color: #7930A5;
    padding: 10px;
    text-align: right;
    z-index: 999;
}

  
</style>

<body>
  <nav class="navbar sticky-top" style="background-color: #7930A5;">

    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand" href="#">
        <img src="pic/logo-amikom.png" alt="Logo" width="150" height="50" class="d-inline-block align-text-top">
      </a>

      <span class="navbar-text">
        Edit Data Dosen
      </span>

      <a href="dashboard.php">
        <button type="submit" class="btn btn-warning ms-auto">Kembali Ke Dashboard</button>
      </a>
  </nav>
  </div>


  <div class="container form-control mt-3">
    <br>
    <form action="controller-edit.php" method="POST">
      <fieldset>

        <div class="mb-3 w-25">
          <label for="kode_matkul" class="form-label">Kode Mata Kuliah :</label>
          <input type="text" class="form-control" name="kode_matkul" placeholder="Kode Mata Kuliah"
            value="<?php echo $matkul['kode_matkul'] ?>">
        </div>

        <div class="mb-3 w-25">
          <label for="nama_matkul" class="form-label">Nama Mata Kuliah :</label>
          <input type="text" class="form-control" name="nama_matkul" placeholder="Nama Mata Kuliah"
            value="<?php echo $matkul['nama_matkul'] ?>">
        </div>

        <div class="mb-3">
          <label for="desk_matkul" class="form-label">Deskripsi Mata Kuliah</label>
          <textarea class="form-control" name="desk_matkul" id="desk_matkul" rows="3"
            placeholder="Ketikkan Deskripsi Mata Kuliah"><?php echo $matkul['desk_matkul']; ?></textarea>
        </div>

        <div class="floating-button-container">
          <button type="submit" class="btn btn-warning" name="edit">Simpan</button>

          <button type="button" class="btn btn-warning" name="kembali"
            onclick="window.location.href='view.php'">Kembali</button>
        </div>

      </fieldset>
    </form>
    <br>
  </div>
</body>