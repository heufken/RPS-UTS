<?php
include("config.php");

$kode = $_GET['kode_matkul'];


$sql_materi = "DELETE FROM materi WHERE kode_matkul = '$kode'";
$query_materi = mysqli_query($sambung, $sql_materi);


$sql_matkul = "DELETE FROM matkul WHERE kode_matkul = '$kode'";
$query_matkul = mysqli_query($sambung, $sql_matkul);

if ($query_materi && $query_matkul) {
    header('Location: view.php');
} else {
    echo "Gagal menghapus data: " . mysqli_error($sambung);
}
?>