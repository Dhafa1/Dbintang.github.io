<html?>
<a href="pegawai.php">Kembali</a>
    <h3>EDIT PEGAWAI</h3>
    
    <?php
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM data_pegawai WHERE id_pegawai='$id'");    
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pegawai.php">
    <table>
        <tr>
            <td>id :</td>
            <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
        </tr>
        <tr>
            <td>nama :</td>
            <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
        </tr>
        <tr>
            <td>alamat :</td>
            <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>telepon :</td>
            <td><input type="numbe" name="telepon" value="<?php echo $tampil['telepon']; ?>"></td>
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