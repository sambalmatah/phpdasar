<?php 
    function salam($nama) {
        return "Selamat Datang, $nama";
    }

    function greeting($waktu, $nama) {
        return "Selamat $waktu, $nama";
    }

    function defaultGreeting($waktu = "Datang", $nama = "Admin") {
        return "Selamat $waktu, $nama";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan User Defined Function</title>
</head>
<body>
    <h1><?php echo salam("Yudi Ari"); ?></h1>
    <h2><?php echo greeting("Siang", "Nugroho"); ?></h2>
    <h3><?php echo defaultGreeting(); ?></h3>
</body>
</html>