<?php
include 'koneksi.php';
$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];


mysqli_query($koneksi,"insert into data_pegawai values('$id_pegawai','$nama_pegawai','$alamat','$telepon')");
header("location:pegawai.php");
?>