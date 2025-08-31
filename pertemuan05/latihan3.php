<?php 
$mahasiswas = [
    ["Yudi Ari", "230545405", "Sistem Informasi", "yudiari@gmail.com"],
    ["Ari Nugroho", "230456875", "Teknik Informasi", "arinugroho@gmail.com"],
    ["NugrohoYudi", "230549787", "Teknik Komputer", "nugrohoyudi@gmail.com"],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswas as $mahasiswa ) : ?>
            <?php foreach( $mahasiswa as $detmahasiswa ) : ?>
                <li><?php echo $detmahasiswa; ?></li>
            <?php endforeach; ?>
            <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>