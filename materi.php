<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>View Dosen</title>
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

  .table td {
    align-items: center;
  }

  .table th {
    white-space: nowrap;
    /* Hindari pemutaran teks */
    text-align: center;
    align-items: center;
    
  }
</style>

<body>
  <nav class="navbar sticky-top" style="background-color: #7930A5;">
    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand" href="#">
        <img src="pic/logo-amikom.png" alt="Logo" width="150" height="50" class="d-inline-block align-text-top">
      </a>
      <span class="navbar-text">
        View Dosen
      </span>
      <a href="view.php">
        <button type="submit" class="btn btn-warning ms-auto">Kembali</button>
      </a>
    </div>
  </nav>
  <div class="container form-control mt-3">
    <table class="table table-hover">
      <thead>
        <tr class="tr">
          <th class="satu">Pertemuan</th>
          <th>Judul Materi</th>
          <th>Deskripsi Materi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("config.php");

        // Ambil kode_matkul dari URL
        if (isset($_GET['kode_matkul'])) {
          $kode_matkul = $_GET['kode_matkul'];

          // Kueri database untuk mengambil materi sesuai dengan kode_matkul
          $sql = "SELECT * FROM materi WHERE kode_matkul = '$kode_matkul'";
          $query = mysqli_query($sambung, $sql);
          $nomor = 1;

          // Mulai menampilkan materi yang ditemukan
          while ($materi = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$nomor."</td>";
            echo "<td>" . $materi['judul_materi'] . "</td>"; // Kolom Judul Materi
            echo "<td>" . $materi['desk_materi'] . "</td>"; // Kolom Deskripsi Materi
            echo "<td>";

            // Tampilkan Action Edit dan Hapus hanya jika ada materi
            echo "<a href='editmateri.php?kode_matkul=" . $kode_matkul . "&judul_materi=" . $materi['judul_materi'] . "'> Edit </a> |";
            echo "<a href='controller-hapusmateri.php?kode_matkul=" . $kode_matkul . "&judul_materi=" . $materi['judul_materi'] . "'> Hapus </a>";

            echo "</td>";
            echo "</tr>";
            $nomor++;
          }
        } else {
          echo "Kode Mata Kuliah tidak ditemukan.";
        }


        ?>
      </tbody>
    </table>
  </div>
</body>

</html>