<html>
<h3>edit-tamu</h3>
<style>
     div {
  border: 1px solid;
}
h3 {
  text-align: center;
}

/* Style the form container */
form {
  border: 1px solid; 
  max-width: 400px;
  margin: 0 auto;
}

/* Style the table */
table {
  width: 100%;
  border-collapse: collapse;
}

/* Style table cells */
td {
  padding: 10px;
  text-align: center;
}

/* Style input fields */
.stylefield{
  width: 100%;
  padding: 5px;
  margin: 5px 0;
}

/* Style the submit button */
input[type="submit"] {
  width: 100px;
  height: 50px;
  margin: 10px;
  border: none;
  border-radius: 10px;
  background: green;
  color: rgb(255, 255, 255);
  font-size: 1rem;
  cursor: pointer;
  transition: ease-out 0.2s;
}

/* Add some spacing between table rows */
tr {
  border-bottom: 1px solid #ddd;
}

/* Hover effect for the submit button */
input[type="submit"]:hover {
  background-color: #45a049;
}

</style>

<?php
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM tamu WHERE id_tamu='$id'");    
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-tamu.php">
<table>
    <tr>
        <td>id :</td>
        <td><input type="number" name="id_tamu" value="<?php echo $tampil['id_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>nama :</td>
        <td><input type="text" name="nama_tamu" value="<?php echo $tampil['nama_tamu']; ?>"></td>
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
        <td><a href="tamu.php">Kembali</a></td>      
    </tr>
</table>
</form>

<?php
}
?>
</html>