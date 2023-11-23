<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Tambah Data Pegawai</title>
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
    <h3>Tambah Data Pegawai</h3>
    <form method="post" action="input-aksi-pegawai.php">
        <table>
            <tr>
                <td>id </td>
                <td><input type="number" name="id_pegawai"></td>
            </tr>
            <tr>
                <td>nama </td>
                <td><input type="text" name="nama_pegawai"></td>
            </tr>
            <tr>
                <td>alamat </td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>telepon </td>
                <td><input type="text" name="telepon"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
                <td><a href="pegawai.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
