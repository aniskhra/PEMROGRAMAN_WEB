<?php
    $value1 = 'anis'; // nilai variabel $value1 di-set sebagai 'anis'
    $value2 = 'Annisa Alimatul Khoiria'; // nilai variabel $value2 di-set sebagai 'Annisa Alimatul Khoiria'
    setcookie("username", $value1); // cookie dengan nama "username" dan nilai $value1 diset
    setcookie("nama_lengkap", $value2, time()+3600); // cookie dengan nama "nama_lengkap", nilai $value2, dan loginnya expired 3600 detik (1 jam)
    echo "<h2>Ini halaman untuk set cookie</h2>"; // menampilkan judul halaman
    echo "<h2>Klik <a href='cookies2.php'>disini </a> untuk mengecek cookies.</h2>"; // menampilkan hyperlink untuk menuju halaman "cookies2.php" yang berfungsi untuk mengecek cookie
?>