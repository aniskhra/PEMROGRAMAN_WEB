<?php
include('koneksi.php');
$id = $_GET['nim'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$id'");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIHAT DATA</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>
    <form method="post" action="update.php">
        <table>
        <?php while($d = mysqli_fetch_array($data)){ ?>
            <tr>
                <td>NIM</td>
                <td> : </td>
                <td><?= $d['nim'] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td><?= $d['nama'] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : </td>
                <td><?= $d['alamat'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </form>
    <br>
    <a href="full.php"><<< Kembali ke semua data</a>
</body>
</html>
