<?php

include("config.php");

$kode = $_GET['judul_materi']; 

$sql = "DELETE FROM materi WHERE judul_materi = '$kode'";
$query = mysqli_query($sambung, $sql);

if ($query) {
    header('Location: materi.php'); 
    echo "Gagal menghapus data: " . mysqli_error($sambung);
}

?>