<?php
include 'koneksi.php';
$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];


mysqli_query($koneksi,"insert into tamu values('$id_tamu','$nama_tamu','$alamat','$telepon')");
header("location:tamu.php");
?>