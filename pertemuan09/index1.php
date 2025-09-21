<?php 
    // koneksi ke database
    $connect = mysqli_connect("localhost", "root","", "phpdasar");

    // ambil data dari table mahasiswa / query
    $result = mysqli_query($connect, "SELECT * FROM mahasiswa");

    // ambil data (fecth) mahasiswa dari object result
    // mysqli_fetch_row()       mengembalikan array numerik
    // mysqli_fecth_assoc()     mengembalikan array associative
    // mysqli_fetch_array()     mengembalikan array numerik dan associative
    // mysqli_fetch_object()    mengembalikan array dengan bentuk objek
    
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

        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="#">hapus</a> |
                <a href="#">ubah</a>
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