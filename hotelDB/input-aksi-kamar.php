<?php
include 'koneksi.php';
$id_kamar = $_POST['id_kamar'];
$nomor_kamar = $_POST['nomor_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga_malam = $_POST['harga_malam'];


mysqli_query($koneksi,"insert into kamar values('$id_kamar','$nomor_kamar','$tipe_kamar','$harga_malam')");
header("location:kamar.php");
?>