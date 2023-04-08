<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Membuat judul dokumen -->
    <title>Cek Tipe</title>
</head>
<body>

<!-- Menambahkan kode PHP -->
<?php

$bil = 3; // Deklarasi dan inisialisasi
var_dump(is_int($bil)); // Dumping informasi dan menguji tipe data suatu variabel
// Output: bool(true)

$var = ""; // Deklarasi dan inisialisasi
var_dump(is_string($var)); // Dumping informasi dan menguji tipe data suatu variabel
// Output: bool(true)

?>

</body>
</html>