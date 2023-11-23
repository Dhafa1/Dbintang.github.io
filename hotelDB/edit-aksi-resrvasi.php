<?php
include 'koneksi.php';

$id_tamu  = $_POST['id_tamu'];
$id_kamar = $_POST['id_kamar'];
$chek_in = $_POST['chek_in'];
$chek_out = $_POST['chek_out'];

mysqli_query ($koneksi, "UPDATE resrvasi SET  id_tamu='$id_tamu' , id_kamar='$id_kamar' , chek_in='$chek_in' , chek_out='$chek_out' WHERE id_tamu='$id_tamu'");
header ("location:resrvasi.php");
?>