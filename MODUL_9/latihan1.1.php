<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Membuat judul dokumen -->
    <title>Metode GET</title>
</head>

<body>
    <!-- Menambahkan pemrosesan form dengan metode GET -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> Nama
        <!-- Menambahkan input nama dengan jenis text, lalu menambahkan baris baru -->
        <input type="text" name="nama" /> <br />
        <!-- Menambahkan tombol untuk submit -->
        <input type="submit" value="OK" />
    </form>

<!-- Menambahkan kode PHP -->
<?php
// Jika form diisi nama lalu menekan OK, makan akan muncul pesan Hello, nama
if (isset($_GET['nama'])) {
echo 'Hello, ' . $_GET['nama'];
}
?>

</body>
</html>