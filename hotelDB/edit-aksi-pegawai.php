<?php
include 'koneksi.php';

$id_pegawai  = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

mysqli_query ($koneksi, "UPDATE data_pegawai SET  id_pegawai='$id_pegawai' , nama_pegawai='$nama_pegawai' , alamat='$alamat' , telepon='$telepon' WHERE id_pegawai='$id_pegawai'");
header ("location:pegawai.php");
?>