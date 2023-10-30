<?php
include("config.php");

$user = $_POST['user'];
$password = $_POST['password'];

if (!empty($user) && !empty($password)) {
    // Lakukan hash kata sandi yang dimasukkan oleh pengguna
    $hashed_password = md5($password);

    $query = mysqli_query($sambung, "SELECT * FROM userlogin WHERE user='$user' AND password='$hashed_password'");

    $result = mysqli_num_rows($query);

    if ($result > 0) {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['status'] = "login";
        header("location: dashboard.php");
    } else {
        $_SESSION['error']="Username atau Password Anda salah";
        header("location: index.php?app=gagal");
    }
} else {
    $_SESSION['error']="Username atau password tidak boleh kosong";
    header("location: index.php?app=error");
}
?>
