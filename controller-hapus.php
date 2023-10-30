<?php

include("config.php");

$kode = $_GET['kode_matkul']; 

$sql = "DELETE FROM matkul WHERE kode_matkul = '$kode'";
$query = mysqli_query($sambung, $sql);

if ($query) {
    header('Location: view.php'); 
    echo "Gagal menghapus data: " . mysqli_error($sambung);
}

?>