<html>
<head>
    <title>Tampilan Tabel kamar</title>
    <style>
     table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}

th{
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    color: white;
}
 td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    color: black;
}

th {
    background-color: #f2f2f2;
}

/* Gaya untuk tombol Tambahkan Data Baru */
a.add-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin: 10px;
}

/* Gaya untuk tombol Hapus dan Edit */
a.action-button {
    padding: 5px 10px;
    margin-right: 5px;
    text-decoration: none;
    background-color: #d9534f;
    color: #fff;
    border-radius: 3px;
}

a.edit-button {
    background-color: #5bc0de;
}

*{
    text-align: center;
    font-family: sans-serif;
}

.tambah{
    color: #d9534f;
}
th {
    background-color: #333950;
    color: white
}

    </style>
</head>
<body>
        <h2>Tabel Kamar</h2>
        <table>
            <tr>
                <th>id_kamar</th>
                <th>nomor_kamar</th>
                <th>tipe_kamar</th>
                <th>harga_malam</th>
                <th>hapus</th>
                <th>edit</th>
            </tr>
<?php
    include "koneksi.php";
    $data=mysqli_query($koneksi,"select * from kamar");
    while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['nomor_kamar'] ?> </td>
    <td> <?php echo $tampil['tipe_kamar'] ?> </td>
    <td> <?php echo $tampil['harga_malam'] ?> </td>
    <td><a href="hapus-kamar.php?id=<?php echo $tampil['id_kamar']; ?>">Hapus</a>
    <td><a href="edit-kamar.php?id=<?php echo $tampil['id_kamar']; ?>">Edit</a>
    </td>
</tr>

<?php
    }
?>
</table>
<a href="input-kamar.php"> Tambahkan data baru</a>
<br><a href="hotel.html">Kembali</a></br>
</html>

            