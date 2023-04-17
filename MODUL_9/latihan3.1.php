<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Membuat judul dokumen -->
    <title>Data Radio Button</title>
</head>

<body>
    <!-- Menambahkan pemrosesan form dengan metode POST -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Jenis Kelamin
        <!-- Menambahkan input jenis kelamin dengan jenis radio yang dapat dipilih salah satu -->
        <input type="radio" name="sex" value="Pria" />Pria
        <input type="radio" name="sex" value="Wanita" />Wanita <br />
        <!-- Menambahkan tombol untuk submit -->
        <input type="submit" value="ok" />
    </form>

<!-- Menambahkan kode PHP -->    
<?php
// Jika memilih jenis kelamin lalu klik OK, maka akan menampilkan jenis kelamin sesuai yang kita pilih
if (isset($_POST['sex'])) {
    echo $_POST['sex'];
}
?>

</body>
</html>