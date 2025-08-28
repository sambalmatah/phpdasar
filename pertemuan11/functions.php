<?php 
    $conn = mysqli_connect("localhost:3360", "root", "", "phpdasar");

    function query($query) {
        global $conn;
        $result =  mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }

        return $rows;
    }


    function tambah($data) {
        // ambil variabel conn dari global
        global $conn;

        // ambil data tiap elemen
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')";

        // query insert data
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    function hapus($id) {
        // ambil variabel conn dari global
        global $conn;

        // query
        $query = "DELETE FROM mahasiswa WHERE id = $id";

        // query hapus data
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    function ubah($data) {
        // ambil variabel conn dari global
        global $conn;

        // ambil data tiap elemen
        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query
        $query = "UPDATE mahasiswa SET
                    nim = '$nim', nama = '$nama', email = '$email', jurusan = '$jurusan', gambar = '$gambar'
                    WHERE
                    id = $id;
                    ";

        // query ubah data
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


 ?>