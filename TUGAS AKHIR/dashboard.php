<?php
include("koneksi.php");

session_start();

// Cek apakah pengguna sudah login atau belum
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

// Proses logout
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <!-- Styling menggunakan CSS -->
    <style>
        body {
            background-color: #f2f2f2;
            font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #1c87c9;
            padding: 6px; 
            display: flex;
            
        }

        .navbar img {
            margin-top: 0px;
            margin-left: 30px;
            width: 40px;
            height: 40px;
        }

        .school-name {
           margin-top: 0px;
           margin-left: 12px;
           color: #fff;
           font-weight: bold;
           text-decoration: none;
        }
        
        .school-name:hover {
            color: #fff; 
        }

        .logout-button {
            background-color: #e40004;
            border: none;
            border-radius: 4px;
            color: #fff;
            margin-left: auto;
            margin-right: 30px;
            margin-top: 3px;
            margin-bottom: 5px;
            cursor: pointer;
            font-size: 16px;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #990000;
            color: #fff;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px;
        }

        .box {
            background-color: #fff;
            border-radius: 4px;
            padding: 20px;
        }

        .title {
            font-weight: bold;
            margin-top: 0;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        
    </style>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <!-- Javascript -->
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable({
                columnDefs: [
                    { orderable: false, targets: 0 } // Kolom nomor memiliki indeks 0
                ],
                order: [[2, 'asc']] // Mengurutkan kolom "Nama" secara ascending
            });
        });

        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data?");
        }
    </script>
</head>
<body>
    <!-- Menambahkan navigation bar -->
    <div class="navbar">
        <!-- Menambahkan logo dan nama sekolah -->
        <img src="logo.png" alt="logo">
        <a class="school-name">SMA HARAPAN BANGSA</a>

        <!-- Menambahkan tombol logout -->
        <a href="logout.php" class="logout-button">Logout</a>
    </div>

    <div class="container">
        <div class="box">
            <!-- Menambahkan judul -->
            <h2 class="title">Data Siswa</h2>
            <!-- Menambahkan tabel -->
            <table class="table table-hover" id="data-table">
                <thead>
                <!-- Menambahkan tabel row -->
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Menu</th>
                </tr>
                </thead>
                <?php 
                include ("koneksi.php");
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * from siswa ORDER BY nama ASC");
                while($row = mysqli_fetch_assoc($data)) { 
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nisn']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['jenis_kelamin']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                            <a class="btn btn-outline-primary" href="lihat.php?id=<?php echo $row['nisn']; ?>">Lihat</a>
                            <a class="btn btn-outline-primary" href="edit.php?id=<?php echo $row['nisn']; ?>">Edit</a>
                            <a class="btn btn-outline-primary" href="hapus.php?id=<?php echo $row['nisn']; ?>" onclick="return confirmDelete()">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                } 
                ?>
            </table>
            <a href="tambahdata.php" class="btn btn-primary mb-3">Tambah Data</a>
        </div>
    </div>
</body>
</html>
