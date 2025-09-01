<?php 
// $_GET
$mahasiswas = [
    [
        "nama" => "Yudi Ari",
        "nim" => "123456",
        "email" => "yudiarinugroho@gmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar" => "01.jpg"
    ],
    [
        "nama" => "Ari Nugroho",
        "nim" => "456789",
        "email" => "arinugroho@gmail.com",
        "jurusan" => "Teknik Informasi",
        "gambar" => "02.jpg"
    ],
    [
        "nama" => "Nugroho Yudi",
        "nim" => "789123",
        "email" => "nugrohoyudi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "03.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswas as $mahasiswa) : ?>
            <img src="img/<?php echo $mahasiswa["gambar"]; ?>" alt="">
            <li>Nama : <?php echo $mahasiswa["nama"]; ?></li>
            <li>NIM : <?php echo $mahasiswa["nim"]; ?></li>
            <li>Email : <?php echo $mahasiswa["email"]; ?></li>
            <li>Jurusan : <?php echo $mahasiswa["jurusan"]; ?></li>
            <br>
        <?php endforeach; ?>

    </ul>
    
</body>
</html>