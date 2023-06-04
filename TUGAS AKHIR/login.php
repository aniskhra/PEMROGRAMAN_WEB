<?php
include("koneksi.php");
$message = null;

session_start();

// Cek apakah pengguna sudah login atau belum
if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
    exit;
}

// Proses login
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa keberadaan pengguna di database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    // Jika data pengguna ditemukan, buat session dan arahkan ke dashboard
    if(mysqli_num_rows($result) > 0){
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $message = (object) [
            'type' => 'danger',
            'text' => 'Username atau password salah!'
        ];
        header("refresh:2; url=login.php");
    }
}
?>

<!-- Login Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Styling menggunakan CSS -->
    <style>
        body {
            background-color: #f2f2f2;
            font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
        }

        img {
            margin-top: 10px;
            margin-left: 30px;
            width: 40px;
            height: 40px;
        }

        .school-name {
           margin-top: 20px;
           margin-left: 12px;
           color: black;
           font-weight: bold;
        }

        .login-box {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            margin: 100px auto;
            padding: 30px;
        }

        .login-box h1 {
            margin: 0 0 25px;
            padding: 0;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .show-password {
            position: absolute;
            right: 3px;
            top: 40%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .login-box .user-box input {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            padding-top: 27px;
            padding-left: 10px;
            padding-bottom: 10px;
            width: 95%;
            margin-bottom: 20px;
        }

        .login-box .user-box label {
            font-size: 16px;
            left: 10px;
            top: 10px;
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            padding: 10px 0;
            pointer-events: none;
            position: absolute;
            transition: 0.5s;
        }

        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            color: #1c87c9;
            font-size: 14px;
            top: -3px;
        }

        .login-box .submit-button {
            background-color: #1c87c9;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
            width: 100%;
        }

        .login-box .submit-button:hover {
            background-color: #095484;
        }

        .error {
            color: red;
            margin: 10px 0;
            text-align: center;
        }
    </style>

    <!-- Javascript -->
    <script>
        function validateForm() {
            var username = document.forms["loginForm"]["username"].value;
            var password = document.forms["loginForm"]["password"].value;

            if (username == "" || password == "") { // jika username dan password kosong
                alert("Username dan password harus diisi!"); // akan muncul peringatan 

                if(username == ""){ // jika username kosong
                    document.forms["loginForm"]["username"].focus(); // akan mengembalikan focus ke form username
                } else { // jika password kosong
                    document.forms["loginForm"]["password"].focus(); // akan mengembalikan focus ke form password
                } 
                return false;
            }
        }

        // fungsi untuk visibility password
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var passwordVisibility = document.getElementsByClassName("show-password")[0];

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordVisibility.innerHTML = "<img src='open-eye.png' alt='Open Eye'>";
            } else {
                passwordInput.type = "password";
                passwordVisibility.innerHTML = "<img src='closed-eye.png' alt='Closed Eye'>";
            }
        }

    </script>
</head>
<body>

    <!-- Membuat class header untuk menambahkan logo dan nama sekolah -->
    <div class="header">
        <img src="logo.png" alt="logo">
        <a class="school-name">SMA HARAPAN BANGSA</a>
    </div>
    <!-- Membuat class login box -->
    <div class="login-box">
        <!-- Menambahkan judul -->
        <h1>Login</h1>
        <?php 
            if($message) : 
        ?>
        <div class="error"><?php echo $message->text ?></div>
        <?php endif; ?>
        <!-- Menambahkan form -->
        <form name="loginForm" action="<?php $_SERVER['PHP_SELF']?>" method="POST" onsubmit="return validateForm()">
            <!-- Class username -->
            <div class="user-box">
                <input type="text" name="username" id="username">
                <label for="username">Username</label>
            </div>
            <!-- Class password -->
            <div class="user-box">
                <input type="password" name="password" id="password">
                <label for="password">Password</label>
                <span class="show-password" onclick="togglePasswordVisibility()">
                    <img src="closed-eye.png" alt="Closed Eye">
                </span>
            </div>
            <!-- Menambahkan tombol login -->
            <input class="submit-button" type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>