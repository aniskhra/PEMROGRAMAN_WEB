<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Styling menggunakan CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #1c87c9;
            padding: 20px;
        }

        .login-button {
            background-color: #1c87c9;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #095484;
        }

        .content {
            margin: 50px auto;
            padding: 100px;
            max-width: 800px;
            text-align: center;
        }

        .content p{
            font-size: 18px;
        }
        
    </style>
</head>
<body>
    <div class="navbar"></div>

    <div class="content">
        <h1>Selamat Datang di Manajemen Data Siswa!</h1>
        <p>Silakan login untuk mengakses Data Siswa</p>
        <br />
        <a href="login.php" class="login-button">Login</a>
    </div>
</body>
</html>
