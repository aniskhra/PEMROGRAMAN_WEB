<?php
    //set jam expiration date 1 jam yang lalu
    setcookie("username", "", time() -3600); //3600 detik = 1 jam
    setcookie("nama_lengkap", "", time() -3600);
    echo "<h1>Cookies berhasil dihapus</h1>"; // menampilkan pesan berhasil menghapus cookie
    echo "<h2>Klik <a href='cookies2.php'>disini</a> untuk pemeriksaan cookies.</h2>";  // menampilkan hyperlink untuk menuju halaman "cookies2.php" yang berfungsi untuk pemeriksaan cookie
?>