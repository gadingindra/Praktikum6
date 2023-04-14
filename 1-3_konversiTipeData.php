<html>
<head>
    <title>Konversi Tipe Data</title>
</head>
<body>
    <?php
        // Deklarasi variabel a
        $a = 300.4;

        echo $a;
        echo "<br>";
        // Mengubah tipe data variabel a menjadi double
        echo "tipe Double : ", doubleval($a), "<br>";
        // Mengubah tipe data variabel a menjadi integer
        echo "tipe Integer : ", intval($a), "<br>";
        // Mengubah tipe data variabel a menjadi string
        echo "tipe String : ", strval($a);
    ?>
</body>
</html>