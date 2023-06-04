<?php
include("koneksi.php");

// Periksa apakah parameter id ada
if(isset($_POST['id'])){
    $id = $_POST['id'];
    
    // Ambil data siswa berdasarkan NISN
    $query = "SELECT * FROM siswa WHERE nisn='$id'";
    $result = mysqli_query($koneksi, $query);
    $siswa = mysqli_fetch_assoc($result);

    // Periksa apakah data siswa ditemukan
    if($siswa){
        // Perbarui data siswa
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        
        $updateQuery = "UPDATE siswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE nisn='$id'";
        $updateResult = mysqli_query($koneksi, $updateQuery);

        if($updateResult){
            // Data berhasil diperbarui, kembali ke halaman dashboard.php
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Gagal memperbarui data siswa.";
        }
    } else {
        echo "Data siswa tidak ditemukan.";
    }
} else {
    echo "Parameter id tidak ditemukan.";
}
?>