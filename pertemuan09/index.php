<?php 
    // hubungkan koneksi yang ada di file functions.php
    require 'functions.php';

    // buat query mengambil data
    $mahasiswas = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <style>
        img {
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <!-- membuat nomer urut -->
        <?php $i = 1; ?>
        <!-- membuat pengulangan pemanggilan data pada setiap baris -->
        <?php foreach ($mahasiswas as $mahasiswa) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="#">hapus</a> |
                <a href="#">ubah</a>
            </td>
            <td><img src="img/<?php echo $mahasiswa["gambar"]; ?>" alt=""></td>
            <td><?php echo $mahasiswa["nim"]; ?></td>
            <td><?php echo $mahasiswa["nama"]; ?></td>
            <td><?php echo $mahasiswa["email"]; ?></td>
            <td><?php echo $mahasiswa["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>