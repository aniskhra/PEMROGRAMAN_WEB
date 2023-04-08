<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Membuat judul dokumen -->
    <title>Seleksi switch</title>
</head>
<body>

<!-- Menambahkan kode PHP -->
<?php

// Deklarasi dan inisialisasi
$i = 0;

// Seleksi menggunakan switch
if ($i == 0) {
    echo "i equals 0";
} elseif ($i == 1) { 
    echo "i equals 1";
} elseif ($i == 2) { 
    echo "i equals 2";
}

// Ekuivalen, dengan pendekatan switch
switch ($i) { 
case 0:
    echo "i equals 0"; 
    break;
case 1:
    echo "i equals 1"; 
    break;
case 2:
    echo "i equals 2"; 
    break;
}

?>

</body>
</html>