<?php
    // Percabangan untuk menampilkan pesan/pengecekan ada/tidaknya cookies
    if (isset($variable_cookies)){
        echo 'Variable cookiesnya "$variable_cookies" nilainya adalah ' .$variable_cookies;
    }
    else {
        echo "Variable cookies belum diterapkan";
    }
?>