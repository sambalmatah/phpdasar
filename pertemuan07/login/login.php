<?php 
    // cek apakah tombol submit sudah tekan atau belum
    if( isset($_POST["submit"]) ) {
        // cek username & password
        if( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
            // jika benar, redirect ke halaman admin
            header("Location: admin.php");
            exit;
        } else {
            // jika salah, tampilkan pesan kesalahan
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

<?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic">username / password salah!</p>
<?php endif; ?>

    <form action="" method="post">
        <div>
            <label for="username">Username :</label>
            <input type="text" id="username" name="username" placeholder="masukan username...">
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" id="password" name="password" placeholder="masukan password...">
        </div>
        <div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>
</html>