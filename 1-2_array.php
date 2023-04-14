<html>
<head>
    <title>PHP dengan Array</title>
</head>
<body>
    <?php
        // Penulisan array
        $nama[] = "Gading";
        $nama[] = "Indra";
        $nama[] = "Swari";

        // Fungsi echo yang menampilkan nilai/isi dari array
        echo $nama[1]. $nama[2]. $nama[0];
        echo "<br>";

        // Menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "jumlah elemen array = ".$jum_array;
    ?>
</body>
</html>