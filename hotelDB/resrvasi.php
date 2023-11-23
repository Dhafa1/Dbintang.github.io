<html>
<head>
    <title>Tampilan Tabel Reservasi</title>
    <style>
      body {
            background-image: url("bckg3.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th {
            border: 2px solid #ddd;
            padding: 8px;
            text-align: center;
            color: #fff;
            font-style: italic;
        }
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            color: white;
            font-style: bold;
        }
        th {
            background-color: #f2f2f2;
        }

        /* Gaya untuk tombol Tambahkan Data Baru dan Kembali */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px;
        }

        /* Gaya untuk tombol Kembali */
        .button-kembali {
            background-color: #d9534f;
        }

        /* Gaya untuk membuat tombol lebih rapat ke kiri */
        .button-wrapper {
            margin-left: 10px;
        }

        /* Gaya saat hover di atas tombol "Tambahkan data baru" */
        .button:hover {
         background-color: #0056b3; /* Mengubah warna latar belakang saat hover */
         transform: scale(1.1); /* Membuat efek perbesaran saat hover */
         transition: background-color 0.3s, transform 0.3s; /* Transisi efek perubahan warna dan perbesaran */
        }

        /* Gaya saat hover di atas tombol "Kembali" */
         .button-kembali:hover {
         background-color: #c9302c; /* Mengubah warna latar belakang saat hover */
        transform: scale(1.1); /* Membuat efek perbesaran saat hover */
        transition: background-color 0.3s, transform 0.3s; /* Transisi efek perubahan warna dan perbesaran */
        }

        /* Gaya untuk membuat tombol "Tambahkan data baru dan kembali" di tengah */
.button-wrapper {
    margin-right: 10px;
    float: center;
}


        * {
            text-align: center;
            font-family: sans-serif;
            color: #fff;
        }

        .tambah {
            color: #d9534f;
        }
        th {
            background-color: #333950;
            color: white;
        }


    </style>
</head>
<body>
        <h2>Tabel Reservasi</h2>
        <table>
            <tr>
                <th>id_tamu</th>
                <th>id_kamar</th>
                <th>chek_in</th>
                <th>chek_out</th>
                <th>hapus</th>
                <th>edit</th>
            </tr>

<?php
    include "koneksi.php";
    $data=mysqli_query($koneksi,"select * from resrvasi");
    while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['id_tamu'] ?> </td>
    <td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['chek_in'] ?> </td>
    <td> <?php echo $tampil['chek_out'] ?> </td>
    <td><a href="hapus-resrvasi.php?id=<?php echo $tampil['id_tamu']; ?>">Hapus</a>
    <td><a href="edit-resrvasi.php?id=<?php echo $tampil['id_tamu']; ?>">Edit</a>
    </td>
</tr>

<?php
    }
?>
</table>

<!-- Tombol "Tambahkan data baru" -->
<div class="button-wrapper">
    <a href="input-resrvasi.php" class="button">Tambahkan data baru</a>
<!-- Tombol "Kembali" -->
    <a href="hotel.html" class="button button-kembali">Kembali</a>
</div>
</body>
</html>
            
