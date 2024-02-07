<?php
include "koneksi.php";

$user   = $_POST['username'];
$pass   = $_POST['password'];

$sql    = 'INSERT INTO user(username, password) VALUES ("'.$user.'", "'.$pass.'") ';
$query  = mysqli_query($conn, $sql);

if($query) {
    echo "<script>window.alert('Selamat, Akun anda berhasil dibuat'); window.location.href='login.php';</script>";
} else {
    echo "<script>window.alert('Oops!!, Terjadi kesalahan!!!'); window.location.href='registrasi.php';</script>";
}
?>
