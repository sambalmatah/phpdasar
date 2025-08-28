<?php
    $nama = "Ari";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halo selamat datang <?php echo $nama; ?></h1>
</body>
</html>


<!-- Operator -->
<?php
    $x = 10;
    $y = 8;
    echo $x * $y;
?>

<!-- Penggabungan String / Concatenation -->
<?php
    $nama_depan = "Yudi Ari";
    $nama_belakang = "Nugroho";
    echo $nama_depan . " " . $nama_belakang;
?>


<!-- Assignment -->
 <!-- =, +=, -=, *=, /=, %=, .= -->
<?php
    $i = 1;
    $i -= 4;
    echo $i;


    $nama_saya = "Yudi";
    $nama_saya .= " ";
    $nama_saya .= "Ari";
    echo $nama_saya
?>


<!-- Perbandingan -->
 <!-- <, >, <=, >=, ==, != -->
<?php
    var_dump(1 == 5);
?>

<!-- ===, !== -->


<!-- Logika -->
 <!-- &&, ||, ! -->
<?php
    $j = 10;
    var_dump($j <= 20 && $j % 2 == 0);
?>