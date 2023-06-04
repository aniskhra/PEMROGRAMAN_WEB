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
            font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .navbar {
            background-color: #1c87c9;
            padding: 6px; 
            display: flex;
            
        }

        img {
            margin-top: 2px;
            margin-left: 30px;
            width: 40px;
            height: 40px;
        }

        .school-name {
           margin-top: 11px;
           margin-left: 12px;
           color: #fff;
           font-weight: bold;
        }

        .login-button {
            background-color: #fff;
            border-color: #1c87c9;
            color: #1c87c9;
            margin-left: auto;
            margin-right: 30px;
            margin-top: 3px;
            margin-bottom: 5px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .login-button:hover{
            background-color: #d3d3d3;
        }

        .content {
            margin: 50px auto;
            padding: 100px;
            max-width: 800px;
            text-align: center;
        }

        .content p {
            font-size: 16px;
        }

        .login-btn {
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
            background-color: #1c87c9;
            border: none;
            color: #fff;
        }
        
        .login-btn:hover {
            background-color: #095484;
        }

    </style>
</head>
<body>
    <!-- Menambahkan navigation bar -->
    <div class="navbar">
        <!-- Menambahkan logo dan nama sekolah -->
        <img src="logo.png" alt="logo">
        <a class="school-name">SMA HARAPAN BANGSA</a>

        <!-- Menambahkan tombol login -->
        <a href="login.php" class="login-button">Login</a>
    </div>
    <!-- Menambahkan class content -->
    <div class="content">
        <!-- Menambahkan judul dan paragraf -->
        <h1>Selamat Datang!</h1>
        <p>Silakan login untuk mengakses Data Siswa SMA HARAPAN BANGSA</p>
        <br />
        <!-- Menambahkan tombol login -->
        <a href="login.php" class="login-btn">Login</a>
    </div>
</body>
</html>