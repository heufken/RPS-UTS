<?php
include("config.php");

if (isset($_POST['daftar'])) {
 
    $nm = $_POST['nama_matkul'];
    $des = mysqli_real_escape_string($sambung, $_POST['desk_matkul']);
    $kode = $_POST['kode_matkul'];


    $sql1 = "INSERT INTO matkul (nama_matkul, desk_matkul, kode_matkul) VALUE ('$nm', '$des', '$kode')";
    $query1 = mysqli_query($sambung, $sql1);

    
    for ($i = 1; $i <= 14; $i++) {
        $pertemuan = $_POST['pertemuan' . $i];
        $judul = $_POST['judul_materi' . $i];
        $desk_mat = mysqli_real_escape_string($sambung, $_POST['desk_materi' . $i]);

        $sql = "INSERT INTO materi (kode_matkul, pertemuan, judul_materi, desk_materi) VALUE ('$kode', '$pertemuan', '$judul', '$desk_mat')";
        $query = mysqli_query($sambung, $sql);
    }

    if ($query1 && $query) {
        header('Location: tambahdosen.php?status=sukses');
    } else {
        header('Location: tambahdosen.php?status=gagal');
    }
} elseif (isset($_POST['kembali'])) {
    header('Location: dashboard.php');
} else {
    die("Akses dilarang...");
}
?>