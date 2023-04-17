<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Membuat judul dokumen -->
    <title>Prefill Data Radio Button</title>
</head>

<body>
    <!-- Menambahkan pemrosesan form dengan metode POST -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Jenis Kelamin
        <!-- Menambahkan input jenis kelamin dengan jenis radio yang dapat dipilih, pada pilihan Pria sudah terpilih -->
        <input type="radio" name="sex" value="Pria" checked
            <?php
            if (isset($_POST['sex']) && $_POST['sex'] == 'Pria') {
                echo 'checked="checked"';
            }
            ?>
        />Pria
        <input type="radio" name="sex" value="Wanita"
            <?php
            if (isset($_POST['sex']) && $_POST['sex'] == 'Wanita') {
                echo 'checked="checked"';
            }
            ?>
        />Wanita <br />
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