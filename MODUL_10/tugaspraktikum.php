<?php
    // Memulai session
    session_start();
    // Mengecek apakah tombol login telah ditekan
    if (isset($_POST['login'])){ 
        // Mengambil nilai username dan password dari form login
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        // Periksa login
        if ($user == "anis" && $pass == "1111") {
            // Jika berhasil login, maka menciptakan session
            $_SESSION['login'] = $user;
            // menampilkan pesan berhasil login
            echo "<h1>Halo, kamu berhasil login!</h1>";
        } else {
            // Jika login gagal, maka menampilkan pesan error
            echo "<h2>Username atau password salah. Silakan coba lagi!</h2>";
        }
    } else {
        // Jika tombol login belum ditekan, maka form login akan ditampilkan
        ?>
        <html>
            <head>
                <title>Login disini</title>
            </head>
            <body>
                <form action="" method="post">
                    <h2>Login disini</h2>
                    Username: <input type="text" name="user"><br>
                    Password: <input type="password" name="pass"><br>
                    <input type="submit" name="login" value="login">
                </form>
            </body>
        </html>
    <?php 
    }
?>
