<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Membuat judul dokumen -->
    <title>Identifikasi Metode</title>
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
// Jika form diisi nama lalu menekan OK, maka akan muncul metode yang digunakan dalam pemrosesan form
if (isset($_REQUEST['nama'])) {
echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
}
?>

</body>
</html>