<?php
    // Set variable cookies
    $variable_cookies = "Gading";
    // Defines a cookie to be sent along with the rest of the HTTP headers
    setcookie($variable_cookies," ini adalah variable cookies ",time()+60);
    // Set include untuk pemanggilan file 2-5-2_cekCookies.php
    include "2-5-2_cekCookies.php";
?>