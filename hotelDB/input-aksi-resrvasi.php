<?php
include 'koneksi.php';
$id_tamu = $_POST['id_tamu'];
$id_kamar = $_POST['id_kamar'];
$chek_in = $_POST['chek_in'];
$chek_out = $_POST['chek_out'];


mysqli_query($koneksi,"insert into resrvasi values('$id_tamu','$id_kamar','$chek_in','$chek_out')");
header("location:resrvasi.php");
?>