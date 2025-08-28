<?php 
    require 'functions.php';

    $mahasiswas = query("SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

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
        
        <?php $i = 1; ?>
        <?php foreach ( $mahasiswas as $row ) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="#">Hapus</a>
                <a href="#">Perbarui</a>
            </td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" alt=""></td>
            <td><?php echo $row["nim"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
        </tr>
        
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>