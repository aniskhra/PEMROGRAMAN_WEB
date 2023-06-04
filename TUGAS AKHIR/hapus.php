<?php
include("koneksi.php");

// Cek apakah pengguna sudah login atau belum
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn='$id'") or die();

    header("location:dashboard.php?pesan=hapus");
?>