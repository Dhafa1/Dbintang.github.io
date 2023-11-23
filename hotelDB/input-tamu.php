<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Tambah Data Pegawai</title>
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
</head>
<body>
        
        <h3>Tambah Data tamu</h3>
    <form method="post" action="input-aksi-tamu.php">
        <table>
<tr>
            <td>id_tamu</td>
            <td><input type="number" name="id_tamu"></td>
</tr>
<tr>
        <td>nama_tamu</td>
        <td><input type="text" name="nama_tamu"></td>
</tr>
<tr>
        <td>alamat</td>
        <td><input type="text" name="alamat"></td>
</tr>
<tr>
        <td>telepon</td>
        <td><input type="text" name="telepon"></td>
</tr>
<tr>
  <td></td>
  <td><input type="submit" value="SIMPAN"></td>
  <td><a href="tamu.php">Kembali</a></td>
</tr>
</table>
</form>
</html>

