<?php
include 'koneksi.php';

$id= $_GET['id'];
mysqli_query($koneksi,"delete from resrvasi where id_tamu='$id'");

header("location:resrvasi.php");
?>