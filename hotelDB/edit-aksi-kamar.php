<?php
include 'koneksi.php';

$id_kamar  = $_POST['id_kamar'];
$nomor_kamar = $_POST['nomor_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga_malam = $_POST['harga_malam'];

mysqli_query ($koneksi, "UPDATE kamar SET  id_kamar='$id_kamar' , nomor_kamar='$nomor_kamar' , tipe_kamar='$tipe_kamar' , harga_malam='$harga_malam' WHERE id_kamar='$id_kamar'");
header ("location:kamar.php");
?>