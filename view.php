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

  .table th {
    white-space: nowrap; /* Hindari pemutaran teks */
    text-align: center;
  }

  .table th:nth-child(4) {
    width: 500px; /* Atur lebar kolom Deskripsi sesuai kebutuhan Anda */
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

      <a href="dashboard.php">
        <button type="submit" class="btn btn-warning ms-auto">Kembali</button>
      </a>
    </div>

  </nav>
  <div class="container form-control mt-3">
    <table class="table table-hover">

      <thead>
        <tr class="tr">
          <th class="satu">No</th>
          <th>Kode Mata Kuliah</th>
          <th>Nama Mata Kuliah</th>
          <th>Deskripsi</th>
          <!-- <th>Jenis Kelamin</th>
          <th>Skill</th> --> 
          <th>Mau Diapain</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include("config.php");

        $sql = "SELECT * FROM matkul";
        $query = mysqli_query($sambung, $sql);
        $nomor = 1;
        while ($matkul = mysqli_fetch_array($query)) {
          echo "<tr>";
          echo "<td>" . $nomor . "</td>";
          echo "<td>" . $matkul['kode_matkul'] . "</td>";
          echo "<td>" . $matkul['nama_matkul'] . "</td>";
          echo "<td>" . $matkul['desk_matkul'] . "</td>";
          // echo "<td>" . $dosen['jkl_dos'] . "</td>";
          // echo "<td>" . $dosen['skl_dos'] . "</td>";
          echo "<td>";

          echo "<a href='materi.php?kode_matkul=" . $matkul['kode_matkul'] . "'>Lihat Materi</a> | ";
          echo "<a href='editdata.php?kode_matkul=" . $matkul['kode_matkul'] . "'>Edit</a> | ";
          echo "<a href='controller-hapus.php?kode_matkul=" . $matkul['kode_matkul'] . "'>Hapus</a>";
          echo "</td>";
          echo "</tr>";
          $nomor++;
        }
        ?>

      </tbody>
    </table>
  </div>
</body>