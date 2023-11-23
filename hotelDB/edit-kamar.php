<html>
<a href="pegawai.php">Kembali</a>
<h3>edit kamar</h3>

<?php
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM kamar WHERE id_kamar='$id'");    
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-kamar.php">
<table>
    <tr>
        <td>id :</td>
        <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>nomor-kamar :</td>
        <td><input type="text" name="nomor_kamar" value="<?php echo $tampil['nomor_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>tipe-kamar :</td>
        <td><input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>harga-malam :</td>
        <td><input type="numbe" name="harga_malam" value="<?php echo $tampil['harga_malam']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>
</html>