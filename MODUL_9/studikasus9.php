<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Login</title>
    <script language="javascript" type="text/javascript" src="studikasus9.js"></script>
</head>

<body>
<?php $status = ''; ?>
    <form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p align="center"><?php echo $status;?></p>

        <table width="500" border="6" align="center" bgcolor="#b4edf7" rules="groups" cellpadding="8" cellspacing="5">
        <tr>
            <td width="50">&nbsp;</td>
            <td align="left"><font size="10" face="Verdana" color="#000000">Login</font></td>
        </tr>
        <tbody>
        <tr>
            <td width="100">&nbsp;</td>
            <td><font size="4" face="verdana">Username :</font></td>
        </tr>
        <tr>
            <td width="100">&nbsp;</td>
            <td><input type="text" name="username" size="50" id="username" /></td>
        </tr>
        <tr>
            <td width="100">&nbsp;</td>
            <td><font size="4" face="verdana">Password :</font></td>
        </tr>
        <tr>
            <td width="100">&nbsp;</td>
            <td><input type="password" name="password" size="50" id="password" /></td>
        </tr>
        <tr>
            <td width="100">&nbsp;</td>
            <td><input name="submit" type="submit" onClick="return check()" value="LOGIN" /></td>
        </tr>
        </table>
    </form>
<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
  
    if (is_string($username) && is_string($password)) {
        if ($username === 'aniskhra' && $password === 'Anis123') {
            echo 'Welcome ' . $username;
        } else {
            echo 'Username atau password yang anda masukkan salah!';
        }
    } else {
        echo 'Silahkan masukkan username dan password!';
    }
}
?>

</body>
</html>
