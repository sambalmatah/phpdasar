<?php 
    // koneksi ke database
    $connect = mysqli_connect("localhost", "root","", "phpdasar");

    // fungsi untuk membuat kumpulan data yang dibutuhkan
    function query($query) {
        // mendaftarkan variable yang berbeda scoope
        global $connect;
        // ambil keseluruhan data
        $result = mysqli_query($connect, $query);
        // siapkan wadah untuk menampung
        $rows = [];
        // pengulangan setiap data
        while( $row = mysqli_fetch_assoc($result) ) {
            // wadah kosong diisi dengan setiap data
            $rows[] = $row;
        }
        // kembalikan nilai wadah yang telah terisi
        return $rows;
    }   
 ?>