<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Membuat judul dokumen -->
    <title>Metode POST</title>
</head>

<body>
    
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> Nama
        <input type="text" name="nama" /> <br />
        <input type="submit" value="OK" />
    </form>

<?php
if (isset($_GET['nama'])) {
echo 'Hello, ' . $_POST['nama'];
}
?>

</body>
</html>