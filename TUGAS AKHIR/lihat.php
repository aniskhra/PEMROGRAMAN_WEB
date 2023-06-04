<?php
include("koneksi.php");

// Cek apakah pengguna sudah login atau belum
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

// Periksa apakah parameter nim ada
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    // Ambil data siswa berdasarkan NISN
    $query = "SELECT * FROM siswa WHERE nisn='$id'";
    $result = mysqli_query($koneksi, $query);
    $siswa = mysqli_fetch_assoc($result);

    // Periksa apakah data siswa ditemukan
    if($siswa){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Lihat Data Siswa</title>
            <!-- Styling menggunakan CSS -->
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 30px;
                }
                
                h1 {
                    margin-top: 0;
                }
                
                table {
                    border-collapse: collapse;
                    width: 100%;
                    max-width: 600px;
                }
                
                th, td {
                    padding: 8px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }
                
                th {
                    background-color: #f2f2f2;
                }
                
                a {
                    display: inline-block;
                    margin-top: 20px;
                    color: #1c87c9;
                    text-decoration: none;
                    border: 1px solid #1c87c9;
                    padding: 8px 16px;
                    border-radius: 4px;
                    transition: background-color 0.3s;
                }
                
                a:hover {
                    background-color: #1c87c9;
                    color: #fff;
                }
            </style>
        </head>
        <body>
            <h1>Detail Data Siswa</h1>
            <table>
                <tr>
                    <th>NISN</th>
                    <td><?php echo $siswa['nisn']; ?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><?php echo $siswa['nama']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $siswa['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?php echo $siswa['alamat']; ?></td>
                </tr>
            </table>
            <a href="dashboard.php">Kembali</a>
        </body>
        </html>
        <?php
    } else {
        echo "Data siswa tidak ditemukan.";
    }
} else {
    echo "Parameter id tidak ditemukan.";
}
?>
