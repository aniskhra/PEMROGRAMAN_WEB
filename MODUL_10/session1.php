<?php
    // Memulai session
    session_start();
    // Mengecek apakah tombol login telah ditekan
    if (isset($_POST['login'])){ 
        // Mengambil nilai username dan password dari form login
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        // Periksa login
            if ($user == "anis" && $pass="1111") {
                // Jika berhasil login, maka menciptakan session
                $_SESSION['login'] = $user;
                // Menuju ke halaman pemeriksaan session
                echo "<h1>Halo, kamu berhasil login!</h1>";
                echo "<h2>Klik <a href='session2.php'> disini (session2.php)</a> untuk menuju ke halaman 
                pemeriksaan session</h2>";
            } // Bisa ditambahkan kondisi jika gagal login disini
        }
        else {
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
        } ?>