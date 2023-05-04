<?php
    // Mengecek apakah cookie 'username' sudah ada
    if (isset($_COOKIE['username'])) { 
        // jika iya maka menampilkan pesan 'Cookie 'username' ada.' dengan isi cookie 'username'.
        echo "<h1>Cookie 'username' ada. </h1><br> Isinya : ".$_COOKIE ['username']; 
    } else {
        // jika tidak, maka menampilkan pesan 'Cookie 'username' TIDAK ADA'
        echo "<h1>Cookie 'username' TIDAK ADA </h1>"; 
    }

    // Mengecek apakah cookie 'nama_lengkap' sudah ada
    if (isset($_COOKIE [ 'nama_lengkap'])) { 
        // jika iya maka menampilkan pesan 'Cookie 'nama_lengkap' ada.' dengan isi cookie 'nama_lengkap'.
        echo "<h1>Cookie 'nama_lengkap ada. </h1><br> Isinya: ".$_COOKIE ['nama_lengkap']; 
    } else {
        // jika tidak, maka menampilkan pesan 'Cookie 'nama_lengkap' TIDAK ADA'
        echo "<h1>Cookie 'nama_lengkap' TIDAK ADA </h1>"; 
    }
    // Menampilkan pesan dan link untuk menghapus cookie
    echo "<h2>Klik <a href='cookies3.php'> disini </a> untuk menghapus cookies.</h2>"; 
?>