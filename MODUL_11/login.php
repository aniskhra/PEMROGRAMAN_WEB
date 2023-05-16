<?php
session_start();

// Cek apakah pengguna telah mengirimkan form login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data yang dikirimkan dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan proses validasi login
    if ($username === 'annisa' && $password === 'anis123') {
        // Jika login berhasil, simpan username ke dalam sesi
        $_SESSION['username'] = $username;

        // Arahkan pengguna ke halaman dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika login gagal, tampilkan pesan error
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css" type="text/css" />
</head>
<body>
    <h3>Login</h3>
    <!-- Form login -->
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Login">
    </form>

    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
</body>
</html>
