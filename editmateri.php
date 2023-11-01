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
include("config.php");

// Dapatkan data materi dari database
if (isset($_GET['kode_matkul']) && isset($_GET['judul_materi'])) {
  $kode_matkul = $_GET['kode_matkul'];
  $judul_materi = $_GET['judul_materi'];

  $sql = "SELECT * FROM materi WHERE kode_matkul = '$kode_matkul' AND judul_materi = '$judul_materi'";
  $query = mysqli_query($sambung, $sql);

  // Periksa apakah materi ditemukan
  if (mysqli_num_rows($query) > 0) {
    $materi = mysqli_fetch_assoc($query);
  } else {
    echo "Materi tidak ditemukan.";
    exit;
  }
}
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit Materi</title>
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

  .floating-button-container {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 100%;
    /* Lebar penuh */
    max-width: 7680px;
    /* Lebar maksimal (opsional) */
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
      <span class="navbar-text">Edit Data Materi</span>
      <a href="dashboard.php">
        <button type="submit" class="btn btn-warning ms-auto">Kembali ke Dashboard</button>
      </a>
    </div>
  </nav>
  <div class="container form-control mt-3">
    <br>
    <form action="controller-editmateri.php" method="POST">
      <fieldset>
        <div class="mb-3 w-25">
          <label for="kode_matkul" class="form-label">Kode Mata Kuliah :</label>
          <input type="text" class="form-control" name="kode_matkul" value="<?php echo $materi['kode_matkul']; ?>"
            disabled>
          <input type="hidden" name="kode_matkul" value="<?php echo $materi['kode_matkul']; ?>">
        </div>
        <div class="mb-3 w-25">
          <label for="judul_materi" class="form-label">Judul Materi :</label>
          <input type="text" class="form-control" name="judul_materi" value="<?php echo $materi['judul_materi']; ?>">
          <input type="hidden" name="judul_materi_lama" value="<?php echo $materi['judul_materi']; ?>">
        </div>
        <div class="mb-3">
          <label for="desk_materi" class="form-label">Deskripsi Materi</label>
          <textarea class="form-control" name="desk_materi" id="desk_materi"
            placeholder="Ketikkan Deskripsi Materi"><?php echo $materi['desk_materi']; ?></textarea>
        </div>

        <div class="floating-button-container">
          <button type="submit" class="btn btn-warning" name="edit">Simpan</button>

          <button type="button" class="btn btn-warning" name="kembali"
            onclick="window.location.href='materi.php?kode_matkul=<?php echo $kode_matkul; ?>'">Kembali</button>
        </div>

      </fieldset>
    </form>
    <br>
  </div>
</body>