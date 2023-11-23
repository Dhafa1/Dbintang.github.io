<?php
include 'koneksi.php';

$id_tamu  = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

mysqli_query ($koneksi, "UPDATE tamu SET  id_tamu='$id_tamu' , nama_tamu='$nama_tamu' , alamat='$alamat' , telepon='$telepon' WHERE id_tamu='$id_tamu'");
header ("location:tamu.php");
?>