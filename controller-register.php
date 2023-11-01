<?php

include("config.php");

$nama = $_POST['nama'];
$user = $_POST['user'];
$password = md5($_POST['password']);

$sql = "INSERT INTO userlogin (nama, user, password) VALUES ('$nama', '$user', '$password')";
    $query = mysqli_query($sambung, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
        exit;
    } else {
        echo "header('Location: index.php?status=gagal');";
        exit;
    }
