<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Membuat judul dokumen -->
    <title>Prefilling Text Field</title>
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Nama
<input type="text" name="nama"
    value="<?php
    echo isset($_POST['nama']) ? $_POST['nama'] : '';
    ?>"
/> <br />

<input type="submit" value="OK" />
</form>

<?php
if (isset($_POST['nama'])) {
    echo $_POST['nama'];
}
?>

</body>
</html>