<?php
include "koneksi.php";

$trans_code = $_POST['trans_code'];
$id_menu = $_POST['id_menu'];
$id_user = $_POST['id_user'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];
$tgl_input = $_POST['tgl_input'];

$sql = mysqli_query($conn, 'INSERT INTO transaksi (trans_code, id_menu, id_user, jumlah, total, tgl_input, status) VALUES ("'.$trans_code.'", "'.$id_menu.'", "'.$id_user.'", "'.$jumlah.'", "'.$total.'", "'.$tgl_input.'") ');
if($sql) {
    echo "<script>window.alert('Berhasil melakukan pembayaran');window.location.href='home.php';</script>";
} else {
    echo "<script>window.alert('Gagal melakukan pembayaran');window.location.href='transaction.php';</script>";
}
?>
