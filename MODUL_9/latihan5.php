<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Membuat judul dokumen -->
    <title>Data Checkbox</title>
</head>

<body>
    <!-- Menambahkan pemrosesan form dengan metode POST -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Hobi
        <!-- Menambahkan input hobby dengan jenis checkbox yang dapat dipilih lebih dari 1 -->
        <input type="checkbox" name="hobby[]" value="Membaca"
        />Membaca
        
        <input type="checkbox" name="hobby[]" value="Olahraga"
        />Olahraga
        
        <input type="checkbox" name="hobby[]" value="Menyanyi"
        />Menyanyi <br />
        <!-- Menambahkan tombol untuk submit -->
        <input type="submit" value="ok" />
    </form>

<!-- Menambahkan kode PHP -->
<?php

// Ekstraksi nilai
if (isset($_POST['hobby'])) {
    foreach ($_POST['hobby'] as $key => $val) {
        echo $key . ' -> ' .$val . '<br />';
    }
}
?>

</body>
</html>