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
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .navbar-text {
    font-family: Helvetica, sans-serif;
    font-weight: bold;
    color: white;
  }


  .container {
    flex: 1;
  }

  /* footer {
    background-color: #7930A5;
    padding: 20px 0;
    color: white;
  } */

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

      <span class="navbar-text mx-auto">
        Tambah RPS
      </span>

    </div>

  </nav>
  <form action="controller-tambah.php" method="POST">
    <div class="container form-control mt-3">
      <br>
      <div class="InformasiPokok">
        <h5><b>Informasi Pokok</b></h5>
        <div class="row">
          <div class="mb-3 w-25">
            <label for="kode_matkul" class="form-label">Kode Mata Kuliah</label>
            <input type="text" class="form-control" name="kode_matkul" placeholder="Ketikkan Kode Mata Kuliah" required>
          </div>

          <div class="mb-3 w-25">
            <label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
            <input type="text" class="form-control" name="nama_matkul" placeholder="Ketikkan Nama Mata Kuliah" required>
          </div>

          <div class="mb-3">
            <label for="desk_matkul" class="form-label">Deskripsi Mata Kuliah</label>
            <textarea class="form-control" name="desk_matkul" id="desk_matkul" rows="3"
              placeholder="Ketikkan Deskripsi Mata Kuliah" required></textarea>
          </div>
        </div>
      </div>
      <br>
      <div class="Materi">
        <h5><b>Informasi Materi</b></h5>

        <!-- Mulai loop untuk 14 materi -->
        <?php for ($i = 1; $i <= 14; $i++) { ?>
          <div class="row">
            <!-- <div class="mb-3 w-25">
              <label for="pertemuan<?= $i ?>" class="form-label">Pertemuan
                <?= $i ?>
              </label>
              <input type="text" class="form-control" name="pertemuan<?= $i ?>"
                placeholder="Ketikkan Pertemuan Ke-<?= $i ?>" required>
            </div> -->

            <div class="mb-3 w-25">
              <label for="judul_materi<?= $i ?>" class="form-label">Judul Materi
                <?= $i ?>
              </label>
              <input type="text" class="form-control" name="judul_materi<?= $i ?>"
                placeholder="Ketikkan Judul Materi <?= $i ?>" required>
            </div>

            <div class="mb-3">
              <label for="desk_materi<?= $i ?>" class="form-label">Deskripsi Materi
                <?= $i ?>
              </label>
              <textarea class="form-control" name="desk_materi<?= $i ?>" id="desk_materi<?= $i ?>" rows="3"
                placeholder="Ketikkan Deskripsi Materi <?= $i ?>" required></textarea>
            </div>
          </div>
        <?php } ?>
        <!-- Selesai loop untuk 14 materi -->

        <div class="floating-button-container">
          <button type="submit" class="btn btn-warning" name="daftar">Simpan</button>

          <button type="button" class="btn btn-warning" onclick="window.location.href='dashboard.php'">Kembali</button>
        </div>
      </div>
    </div>
  </form>

  </div>
  </div>

</body>