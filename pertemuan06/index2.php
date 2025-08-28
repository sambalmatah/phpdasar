<?php
    // check variable
    if( !isset($_GET["nama"]) || 
        !isset($_GET["nim"]) || 
        !isset($_GET["email"]) ||
        !isset($_GET["jurusan"]) ) {
        // redirect
        header("Location: index1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["nim"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>
        <li><?php echo $_GET["jurusan"]; ?></li>
    </ul>

    <a href="index1.php">Kembali ke halaman 1</a>

</body>
</html>