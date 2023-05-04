<?php
    session_start(); // memulai session
    // cek apakah user telah login sebelumnya
    if (isset($_SESSION['login'])) { 
        // menghapus semua variabel yang terdapat dalam session
        unset ($_SESSION); 
        session_destroy(); // menghapus semua data session
        // menampilkan pesan berhasil logout
        echo "<h1>Kamu sudah berhasil logout/keluar</h1>";
        // menampilkan pesan untuk login kembali dan tidak bisa mengakses halaman home lagi
        echo "<h1>Klik <a href='session1.php'/>disini</a> untuk login lagi.<br>Kamu tidak bisa masuk ke
            <a href='session2.php'>HOME (beranda)</a>lagi.</h2>"; 
    }
?>
