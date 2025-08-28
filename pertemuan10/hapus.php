<?php 
    // hubungkan ke file functions
    include 'functions.php';

    // ambil id simpan ke dalam get
    $id = $_GET["id"];

    // cek apakah data terhapus
    if( hapus($id) > 0 ) {
        echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    }

?>