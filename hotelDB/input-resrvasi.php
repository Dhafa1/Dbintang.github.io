<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Tambah Data Reservasi</title>
    <style>
        /* Style untuk menengahkan elemen */
        body {
         margin: 0;
         padding: 0;
        }

        .container {
            text-align: center;
        }

        /* Membuat container untuk pusatkan konten */
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 50vh; /* Sesuaikan dengan tinggi yang Anda inginkan */
        }

        /* Style untuk elemen <h3> */
        h3 {
            text-align: center;
        }

        /* Style untuk form */
        form {
            text-align: left;
        }

    </style>
</head>
<body>
        <div class="container">
         <h3>Tambah Data Resrvasi</h3>
    <form method="post" action="input-aksi-resrvasi.php">
        <table>
<tr>
            <td>id_tamu</td>
            <td><input type="number" name="id_tamu"></td>
</tr>
<tr>
        <td>id_kamar</td>
        <td><input type="number" name="id_kamar"></td>
</tr>
<tr>
        <td>chek_in</td>
        <td><input type="number" name="chek_in"></td>
</tr>
<tr>
        <td>chek_out</td>
        <td><input type="number" name="chek_out"></td>
</tr>
<tr>
  <td></td>
  <td><input type="submit" value="SIMPAN"></td>
  <td><a href="resrvasi.php">Kembali</a></td>
</tr>
</table>
</form>
</html>