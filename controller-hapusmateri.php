<?php
include("config.php");

$kode = $_GET['judul_materi'];


$sql_get_kode_matkul = "SELECT kode_matkul FROM materi WHERE judul_materi = '$kode'";
$query_get_kode_matkul = mysqli_query($sambung, $sql_get_kode_matkul);

if ($query_get_kode_matkul && $row = mysqli_fetch_assoc($query_get_kode_matkul)) {
    $kode_matkul = $row['kode_matkul'];


    $sql = "DELETE FROM materi WHERE judul_materi = '$kode'";
    $query = mysqli_query($sambung, $sql);

    if ($query) {

        header('Location: materi.php?kode_matkul=' . $kode_matkul . '&status=sukses');
        exit; 
    }
}

echo "Gagal menghapus data: " . mysqli_error($sambung);
?>