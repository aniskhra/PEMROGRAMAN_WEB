<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Data Mahasiswa</title>
</head>
<body>
    <h3>`Dasboard Data Mahasiswa</h3>
    <h5>Menampilkan data mahasiswa</h5>
    <table border="1">
            <tr>
                <th>No</th>
                <th>nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Menu</th>
            </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * from mahasiswa");
    while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nim']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
            <a href="lihat.php?nim=<?php echo $d['nim']; ?>">Lihat</a>
            <a href="edit.php?nim=<?php echo $d['nim']; ?>">Edit</a>
            <a onclick="return confirm('Apakah anda yakin mau menghapus data? <?= $d['nim'] ?>');" href="hapus.php?nim=<?php echo $d['nim']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
