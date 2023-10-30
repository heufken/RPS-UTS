<?php
include("config.php");

if(isset($_POST['edit'])){
    $kode = $_POST['kode_matkul'];
    $nm = $_POST['nama_matkul'];
    $des = mysqli_real_escape_string($sambung, $_POST['desk_matkul']);

    $sql = "UPDATE matkul SET kode_matkul='$kode', nama_matkul='$nm', desk_matkul='$des'
    WHERE kode_matkul='$kode'";
    $query = mysqli_query($sambung, $sql);

    if( $query ) {
        header('Location: view.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} elseif(isset($_POST['kembali'])){
    header('Location: view.php');
}
else {
    die("Akses dilarang...");
}
?>
