<?php
    // Memulai session
    session_start();
    if (isset($_SESSION['login'])) { // Jika login sudah berhasil maka menampilkan isi session
        echo "<h1>Selamat datang, ".$_SESSION['login']."</h1>"; 
        echo "<h2>Halaman ini bisa tampil jika berhasil login. Ini adalah HOME (beranda) kamu.</h2>"; 
        echo "<h2>Klik <a href='session3.php'> disini (session3.php)</a> untuk logout (keluar)</h2>";
    }
    else {
        // Session tidak muncul karena belum login ata belum berhasil login
        die ("Anda belum login Login dulu <a href='session1.php'> disini</a>");
    }
?>