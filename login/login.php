<?php
require("../koneksi.php");

if (isset($_POST['login'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username='$username' OR email='$username'";
    $user = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($user);

    // jika user terdaftar
    if ($row) {
        // verifikasi password
        if (password_verify($password, $row["password"])) {
            // buat Session
            session_start();
            $_SESSION["user"] = $row["username"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["photo"] = $row["photo"];
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login produk syahid dan gilar</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <p>&larr; <a href="index.php">Home</a>

                <h4>Masuk ke produk syahid dan gilar</h4>
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

                <form action="" method="POST">
                    <div class="bg-login">
                        <div id="box-login">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
                            </div>


                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" />
                            </div>

                            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- isi dengan sesuatu di sini -->
    </div>

    </div>
    </div>

</body>

</html>
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: 'Times New Roman', Times, serif;
    }

    body {
        background-color: burlywood;
    }

    .bg-login {
        display: flex;
        height: 100px;
        justify-content: center;
        align-items: center;
    }

    #box-login {
        width: 300px;
        min-height: 200px;
        border: 1px solid;
        background-color: yellow;
        padding: 15px;
        box-sizing: border-box;
    }
</style>