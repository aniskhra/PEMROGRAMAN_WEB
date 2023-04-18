<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Membuat judul dokumen -->
    <title>Metode GET dengan $_POST</title>
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
// Jika form diisi nama lalu menekan OK, maka tidak akan muncul pesan Hello, nama karena superglobal tidak sesuai dengan metodenya
if (isset($_POST['nama'])) {
echo 'Hello, ' . $_POST['nama'];
}
?>

</body>
</html>