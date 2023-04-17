<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Membuat judul dokumen -->
    <title>Data Seleksi</title>
</head>

<body>
    <!-- Menambahkan pemrosesan form dengan metode POST -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Pekerjaan
        <!-- Menambahkan pilihan pekerjaan dengan opsi yang dapat dipilih -->
        <select name="job">
            <option value="Mahasiswa">Mahasiswa
            <option value="ABRI">ABRI
            <option value="PNS">PNS
            <option value="Swasta">Swasta
        </select> <br />
        <!-- Menambahkan tombol untuk submit -->
        <input type="submit" value="ok" />
    </form>

<!-- Menambahkan kode PHP -->
<?php
// Jika memilih pekerjaan lalu klik OK, maka akan menampilkan pekerjaan sesuai yang kita pilih
if (isset($_POST['job'])) {
    echo $_POST['job'];
}
?>

</body>
</html>