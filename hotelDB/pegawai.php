<html>
<head>
    <title>Tampilan Tabel Pegawai</title>
    <style>
     table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}

th {
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
        <h2>Tabel Pegawai</h2>
        <table>
            <tr>
                <th>id_pegawai</th>
                <th>nama_pegawai</th>
                <th>alamat</th>
                <th>telepon</th>
                <th>hapus</th>
                <th>edit</th>
            </tr>
<?php
    include "koneksi.php";
    $data=mysqli_query($koneksi,"select * from data_pegawai");
    while($tampil=mysqli_fetch_array($data)){
        ?>

<tr>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
    <td> <?php echo $tampil['nama_pegawai'] ?> </td>
    <td> <?php echo $tampil['alamat'] ?> </td>
    <td> <?php echo $tampil['telepon'] ?> </td>
    <td><a href="hapus-pegawai.php?id=<?php echo $tampil['id_pegawai']; ?>">Hapus</a>
    <td><a href="edit-pegawai.php?id=<?php echo $tampil['id_pegawai']; ?>">Edit</a>
</td>
</tr>
<?php
    }
    ?>
</table>
<a href="input-pegawai.php"> Tambahkan data baru</a>
<br><a href="hotel.html">Kembali</a></br>
</html>

            