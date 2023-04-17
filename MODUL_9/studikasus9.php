<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Membuat judul dokumen -->
    <title>Form Login</title>
    <!-- Menambahkan kode javascript -->
    <script >
        // fungsi untuk validasi inputan pada form login
        function check(){
            var user= document.getElementById('username').value.trim();
            var pass= document.getElementById('password').value.trim();
            
            // validasi username tidak boleh kosong
            if(user.length < 1){
                alert('Masukkan username minimal 1 huruf!');
                document.getElementById('username').focus();
                return false;
            }
             // validasi username hanya boleh huruf
            if(!/^[A-Za-z]+$/.test(user)){
                alert('Masukkan username dengan huruf saja!');
                document.getElementById('username').focus();
                return false;
            }
            // validasi password tidak boleh kurang dari 4 huruf
            if(pass.length < 4){
                alert('Masukkan password minimal 4 huruf!');
                document.getElementById('password').focus();
                return false;
            }
             // validasi password hanya boleh huruf
            if(!/^[A-Za-z]+$/.test(pass)){
                alert('Masukkan password dengan huruf saja!');
                document.getElementById('password').focus();
                return false;
            }
            return true;
        }
    </script>
</head>

<!-- Mengatur warna background pada body -->
<body bgcolor="#c9e6f8">
<?php $status = ''; ?>
    <!-- Menambahkan pemrosesan form dengan metode POST -->
    <form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p align="center"><?php echo $status;?></p>

        <!-- Membuat tabel dan mengatur atribut-atributnya -->
        <table width="500" border="3px" align="center" bgcolor="#eef6ff" rules="groups" cellpadding="6" cellspacing="0">
        <!-- Menambahkan tabel row untuk tulisan Login dan mengatur atributnya  -->
        <tr>
            <td width="50">&nbsp;</td>
            <td align="left"><font size="10" face="Verdana" color="#3eb5df">Login</font></td>
        </tr>
        <tbody> 
        <!-- Menambahkan tabel row untuk tulisan Username dan mengatur atributnya  -->
        <tr>
            <td width="100">&nbsp;</td>
            <td><font size="2" face="verdana">Username :</font></td>
        </tr>
        <!-- Menambahkan tabel row untuk input username dan mengatur atributnya  -->
        <tr>
            <td width="100">&nbsp;</td>
            <td><input type="text" name="username" size="35" id="username" /></td>
        </tr>
        <!-- Menambahkan tabel row untuk tulisan Password dan mengatur atributnya  -->
        <tr>
            <td width="100">&nbsp;</td>
            <td><font size="2" face="verdana">Password :</font></td>
        </tr>
        <!-- Menambahkan tabel row untuk input password dan mengatur atributnya  -->
        <tr>
            <td width="100">&nbsp;</td>
            <td><input type="password" name="password" size="35" id="password" /></td>
        </tr>
        <!-- Menambahkan tabel row untuk tombol Login -->
        <tr>
            <td width="100">&nbsp;</td>
            <td><input name="submit" type="submit" onClick="return check()" value="LOGIN" /></td>
        </tr>
        </table>
    </form>

<!-- Menambahkan kode PHP -->
<?php
// Memeriksa apakah variabel username dan password di-set atau tidak
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Mengambil nilai dari variabel username dan password, dan melakukan trim untuk menghapus whitespace yang tidak diinginkan
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Memeriksa apakah nilai dari variabel username dan password adalah string
    if (is_string($username) && is_string($password)) {
        // Memeriksa apakah username dan password sudah sesuai dengan nilai yang diinginkan
        if ($username === 'aniskhra' && $password === 'AnisLogin') {
            echo 'Welcome ' . $username; // Jika benar maka menampilkan pesan selamat datang
        } else {
            echo 'Username atau password yang anda masukkan salah!'; // Jika salah maka menampilkan kesalahan
        }
    } else { 
        echo 'Silahkan masukkan username dan password!';
    }
}
?>

</body>
</html>