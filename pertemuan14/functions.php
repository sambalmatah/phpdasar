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

        // upload gambar
        $gambar = upload();
        if( $gambar === false ) {
            return false;
        }
        
        // query
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')";

        // query insert data
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    function upload() {
        // ambil isi $_FILES
        $namaFile = $_FILES["gambar"]["name"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $errorFile = $_FILES["gambar"]["error"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        // cek apakah tidak ada gambar yang diupload
        if( $errorFile === 4 ) {
            echo "<script>
                    alert('pilih gambar terlebih dahulu!');
            </script>";

            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];

        // ambil ekstensi file yang akan diupload
        $ekstensiGambar = explode('.', $namaFile);

        // ambil eksplode yang terakhir bungkus dengan lowerstring
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        // cek ada kah kesesuaian antara ekstensi gambar dengan ekstensi yang valid
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "<script>
                    alert('yang anda upload bukan gambar!');
            </script>";
        
            return false;
        }

        // cek jika ukurannya terlalu besar
        if( $ukuranFile > 1000000 ) {
            echo "<script>
                    alert('ukuran gambar terlalu besar');
            </script>";

            return false;
        }

        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= $ekstensiGambar;

        
        // lolos pengecekan, gambar siap upload
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;

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
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        // cek apakah user pilih gambar baru atau tidak
        if( $_FILES["gambar"]["error"] === 4 ) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

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


    function cari($keyword) {
        $query = "SELECT * FROM mahasiswa
                    WHERE
                    nama LIKE '%$keyword%' OR
                    nim LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%'
                    ";
        
        return query($query);
    }


    function registrasi($data) {
        global $conn;

        $username = stripslashes(strtolower($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

        if( mysqli_fetch_assoc($result) ) {
            echo "
                <script>
                    alert('username sudah terdaftar!');
                </script>
            ";
            
            return false;
        }

        // cek konfirmasi password
        if( $password !== $password2 ) {
            echo "
                <script>
                    alert('konfirmasi password tidak sesuai!');
                </script>
            ";

            return false;
        } 

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan userbaru ke database
        mysqli_query($conn, "INSERT INTO user 
                            VALUES
                                ('', '$username', '$password')");

        return mysqli_affected_rows($conn);
        
    }
    
    
 ?>