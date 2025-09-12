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
            <li><a href="latihan2.php?nama=<?php echo $mahasiswa["nama"]; ?>
            &nim=<?php echo $mahasiswa["nim"]; ?>
            &email=<?php echo $mahasiswa["email"]; ?>
            &jurusan=<?php echo $mahasiswa["jurusan"]; ?>
            &gambar=<?php echo $mahasiswa["gambar"]; ?>"><?php echo $mahasiswa["nama"]; ?></li></a>   
            <?php endforeach; ?>
        </ul>
</body>
</html>