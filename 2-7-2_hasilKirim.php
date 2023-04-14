<?php
    // Akan berjalan ketika tombol kirim ditekan
    // Jika data inputan kosong, akan didirect ke file 2-7-3_kosong.php
    if (empty($_POST['nama'])) {
        header("Location: 2-7-3_kosong.php");
    }
    // Jika ada inputan, isinya akan ditampilkan
    else {
        echo "<center>Nama :".$_POST['nama']."</center><br>";
    }
?>