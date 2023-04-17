<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Membuat judul dokumen -->
    <title>Prefilling Text Field</title>
</head>

<body>
<!-- Menambahkan pemrosesan form dengan metode POST -->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Nama
<!-- Menambahkan input nama dengan jenis text -->
<input type="text" name="nama"
    value="<?php
    // Jika form diisi nama, maka akan menampilkan nama
    echo isset($_POST['nama']) ? $_POST['nama'] : '';
    ?>"
/> 
<!-- Menambahkan baris baru -->
<br />

<!-- Menambahkan tombol untuk submit -->
<input type="submit" value="OK" />
</form>

<!-- Menambahkan kode PHP -->
<?php
// Jika form diisi nama lalu menekan OK, maka akan menampilkan nama
if (isset($_POST['nama'])) {
    echo $_POST['nama'];
}
?>

</body>
</html>