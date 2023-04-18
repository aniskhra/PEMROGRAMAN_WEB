<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Membuat judul dokumen -->
    <title>Metode POST dengan $_REQUEST</title>
</head>

<body>
    <!-- Menambahkan pemrosesan form dengan metode POST -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> Nama
        <!-- Menambahkan input nama dengan jenis text, lalu menambahkan baris baru -->
        <input type="text" name="nama" /> <br />
        <!-- Menambahkan tombol untuk submit -->
        <input type="submit" value="OK" />
    </form>

<!-- Menambahkan kode PHP -->
<?php
// Jika form diisi nama lalu menekan OK, maka akan muncul pesan Hello, nama
if (isset($_REQUEST['nama'])) {
echo 'Hello, ' . $_REQUEST['nama'];
}
?>

</body>
</html>