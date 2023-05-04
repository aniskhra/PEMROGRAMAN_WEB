<?php
    session_start(); // memulai session

    if (isset($_SESSION['login'])) { // cek apakah user telah login sebelumnya
        unset ($_SESSION); // menghapus semua variabel yang terdapat dalam session
        session_destroy(); // menghapus semua data session
        echo "<h1>Kamu sudah berhasil logout/keluar</h1>"; // menampilkan pesan berhasil logout
        echo "<h1>Klik <a href='session1.php'/>disini</a> untuk login lagi.<br>Kamu tidak bisa masuk ke
            <a href='session2.php'>HOME (beranda)</a>lagi.</h2>"; // menampilkan pesan untuk login kembali dan tidak bisa mengakses halaman home lagi
    }
    
?>
