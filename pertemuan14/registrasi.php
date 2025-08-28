<?php 
    // hubungkan dengan file function.php
    include 'functions.php';

    // jika tombol register ditekan
    if( isset($_POST["register"]) ) {

        if( registrasi($_POST) > 0 ) {
            echo "
                <script>
                    alert('user baru berhasil ditambahkan!');
                </script>
            ";
        } else {
            echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="password2">Konfirmasi Password :</label>
        <input type="password" name="password2" id="password2" required>
        <br>
        <br>
        <button type="submit" name="register">Registrasi</button>
    </form>
</body>
</html>