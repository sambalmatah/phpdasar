<?php 
    // koneksi database
    $conn = mysqli_connect("localhost:3360", "root", "", "phpdasar");

    // ambil data dari tabel mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    if( !$result ) {
        echo mysqli_error($conn);
    }

    // ambil data (fetch) mahasiswa dari object result
    // while ($mhs = mysqli_fetch_assoc($result) ) {
    //     var_dump($mhs);

    // };
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
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
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
        <?php endwhile; ?>
    </table>
</body>
</html>