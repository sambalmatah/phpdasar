<?php 
    // hubungkan dengan file function.php
    include 'functions.php';

    // cek apakah tombol submit sudah ditekan
    if( isset($_POST["submit"]) ) {
    
        
        
        // cek apakah data berhasil ditambahkan
        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim" required>
        <br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" required>
        <br>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" required>
        <br>
        <label for="gambar">Gambar :</label>
        <input type="file" name="gambar" id="gambar">
        <br>
        <button type="submit" name="submit">Tambah data</button>
    </form>
</body>
</html>