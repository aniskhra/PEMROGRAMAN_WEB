<?php
include("koneksi.php");

session_start();

// Cek apakah pengguna sudah login atau belum
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

// Proses tambah data
if(isset($_POST['submit'])){
    // Mendapatkan data dari form
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // Query untuk tambah data
    $query = "INSERT INTO siswa (nisn, nama, jenis_kelamin, alamat) VALUES ('$nisn', '$nama', '$jenis_kelamin', '$alamat')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Gagal menambahkan data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Styling menggunakan CSS -->
    <style>
        body {
            background-color: #f2f2f2;
            font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
            padding: 30px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 4px;
            padding: 20px;
        }

        .title {
            font-weight: bold;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .btn-primary {
            margin-top: 10px;
            margin-right: 10px;
        }

        .btn-secondary {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Menambahkan judul -->
        <h2 class="title">Tambah Data Siswa</h2>
        <!-- Menambahkan form -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <!-- Menambahkan tombol untuk untuk menyimpan data yang ingin ditambahkan -->
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <!-- Menambahkan tombol batal yang akan mengarahkan kembali ke dashboard -->
            <a href="dashboard.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>