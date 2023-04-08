<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Membuat judul dokumen -->
    <title>Definisi Fungsi/Prosedur</title>
</head>
<body>

<!-- Menambahkan kode PHP -->
<?php

/**
 * Mencetak string
 * $teks nilai string
 * $bold adalah argumen opsional
*/
function print_teks($teks, $bold = true) { 
    echo $bold ? '<b>' .$teks. '</b>' : $teks;
}

print_teks('Indonesiaku');
// Mencetak dengan huruf tebal

print_teks('Indonesiaku', false);
// Mencetak dengan huruf reguler
?>

</body>
</html>