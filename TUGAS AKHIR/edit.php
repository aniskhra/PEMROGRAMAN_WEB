<?php
include("koneksi.php");

// Cek apakah pengguna sudah login atau belum
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

// Periksa apakah parameter id ada
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
            <title>Edit Data Siswa</title>
            <!-- Styling menggunakan CSS -->
            <style>
                body {
                    font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
                    margin: 0;
                    padding: 30px;
                }
                
                h1 {
                    margin-top: 0;
                }
                
                form {
                    max-width: 400px;
                    margin-top: 20px;
                }
                
                label {
                    display: block;
                    margin-bottom: 5px;
                    font-size: 16px;
                    font-weight: bold;
                }
                
                input[type="text"] {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    margin-bottom: 10px;
                    font-size: 16px;
                }
                
                input[type="submit"] {
                    background-color: #1c87c9;
                    border: none;
                    color: #fff;
                    cursor: pointer;
                    padding: 9px 17px;
                    border-radius: 4px;
                    font-size: 16px;
                    transition: background-color 0.3s;
                }
                
                input[type="submit"]:hover {
                    background-color: #095484;
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
            <h1>Edit Data Siswa</h1>
            <form action="update.php?id=<?php echo $siswa['nisn']; ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $siswa['nisn']; ?>">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?php echo $siswa['nama']; ?>"><br>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $siswa['jenis_kelamin']; ?>"><br>
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $siswa['alamat']; ?>"><br>
                <input type="submit" value="Simpan">    
                <a href="dashboard.php">Kembali</a>
            </form>
            
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
