<html>
<head>
    <title>Tanggalan</title>
</head>
<body>
    <?php
        date_default_timezone_set("Asia/Jakarta");
        // Karakter [m] untuk bulan sebagai angka dengan angka nol di depan
        // Karakter [F] untuk bulan penuh atau nama bulan
        // Karakter [Y] untuk tahun lengkap
        // Karakter [g] untuk jam dalam format 12 jam tanpa awalan nol
        // Karakter [i] untuk menit dengan nol di depan
        // Karakter [s] untuk detik dengan nol di depan
        // Karakter [a] untuk am/pm dalam huruf kecil
        echo date("m-F-Y, g:i:s a");

        echo "<br><br>";
        echo "Waktu hari ini ";
        echo date("l, j F Y, H:i:s A");
    ?>
</body>
</html>