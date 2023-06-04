<?php
session_start();

// Cek apakah pengguna sudah login atau belum
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
?>