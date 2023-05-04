<?php
    // nilai variabel $value1 di-set sebagai 'anis'
    $value1 = 'anis'; 
    // nilai variabel $value2 di-set sebagai 'Annisa Alimatul Khoiria'
    $value2 = 'Annisa Alimatul Khoiria'; 
    // cookie dengan nama "username" dan nilai $value1 diset
    setcookie("username", $value1); 
    // cookie dengan nama "nama_lengkap", nilai $value2, dan loginnya expired 3600 detik (1 jam)
    setcookie("nama_lengkap", $value2, time()+3600); 
    // menampilkan judul halaman
    echo "<h2>Ini halaman untuk set cookie</h2>"; 
    // menampilkan hyperlink untuk menuju halaman "cookies2.php" yang berfungsi untuk mengecek cookie
    echo "<h2>Klik <a href='cookies2.php'>disini </a> untuk mengecek cookies.</h2>"; 
?>