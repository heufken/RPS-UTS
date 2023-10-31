<?php
include("config.php");

if (isset($_POST['edit'])) {
    // Dapatkan data materi yang diedit dari formulir
    $kode_matkul = $_POST['kode_matkul'];
    $judul_materi_lama = $_POST['judul_materi_lama'];
    $judul_materi = $_POST['judul_materi'];
    $desk_materi = mysqli_real_escape_string($sambung, $_POST['desk_materi']);

    // Lakukan query UPDATE untuk memperbarui data materi
    $sql = "UPDATE materi SET desk_materi = '$desk_materi', judul_materi = '$judul_materi' WHERE kode_matkul = '$kode_matkul' AND judul_materi = '$judul_materi_lama'";
    $query = mysqli_query($sambung, $sql);

    if ($query) {
        // Redirect kembali ke halaman materi.php
        header('Location: materi.php?kode_matkul=' . $kode_matkul);
    } else {
        die("Gagal menyimpan perubahan: " . mysqli_error($sambung));
    }
} elseif (isset($_POST['kembali'])) {
    $kode_matkul = $_POST['kode_matkul'];
    header('Location: materi.php?kode_matkul=' . $kode_matkul);
} else {
    die("Akses dilarang...");
}
?>
