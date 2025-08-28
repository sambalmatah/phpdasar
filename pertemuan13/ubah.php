<?php 
    // hubungkan dengan file function.php
    include 'functions.php';


    // ambil data di URL
    $id = $_GET["id"];
    
    // query data mahasiswa berdasarkan id
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
    


    // cek apakah tombol submit sudah ditekan
    if( isset($_POST["submit"]) ) {
    
        // cek apakah data berhasil diubah
        if( ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah!');
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?php echo $mahasiswa['id']; ?>">
        <input type="hidden" name="gambarLama" id="gambarLama" value="<?php echo $mahasiswa['gambar']; ?>">
        <label for="nim">NIM :</label>
    <input type="text" name="nim" id="nim" required value="<?php echo $mahasiswa['nim']; ?>">
        <br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required value="<?php echo $mahasiswa['nama']; ?>">
        <br>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" required value="<?php echo $mahasiswa['email']; ?>">
        <br>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" required value="<?php echo $mahasiswa['jurusan']; ?>">
        <br>
        <label for="gambar">Gambar :</label>
        <br>
        <img src="img/<?php echo $mahasiswa["gambar"]; ?>" alt="">
        <input type="file" name="gambar" id="gambar">
        <br>
        <button type="submit" name="submit">Ubah data</button>
    </form>
</body>
</html>