<!DOCTYPE html>
<html lang="en">
<head>
    <title>Seleksi if-elseif</title>
</head>
<body>

<?php

$a = 10;
$b = 5;

if ($a > $b) {
    echo 'a lebih besar dari b';
} elseif ($a == $b) {
    echo 'a sama dengan b';
} else {
    echo 'a kurang dari b';
}

?>

</body>
</html>