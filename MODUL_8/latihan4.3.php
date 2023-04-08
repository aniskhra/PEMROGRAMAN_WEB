<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Membuat judul dokumen -->
    <title>Seleksi if-elseif</title>
</head>
<body>

<!-- Menambahkan kode PHP -->
<?php

// Deklarasi dan inisialisasi
$a = 10;
$b = 5;

// Seleksi menggunakan pernyataan if-elseif
if ($a > $b) {
    echo 'a lebih besar dari b';
} elseif ($a == $b) {
    echo 'a sama dengan b';
} else {
    echo 'a kurang dari b';
}

?>

</body>
</html>