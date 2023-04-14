<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table width="400" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>
                    <!-- Tombol login yang akan menampilkan fungsi pada file 2-1-2_postAct.php -->
                    <input type="submit" name="btnLogin" value="Login">
                    <input type="reset" name="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['nama'];
            $email = $_REQUEST['email'];
            // Jika kosong, pesan teks di bawah ini akan muncul
            if (empty($name) or empty($email)) {
                header("Location: formLoginEmpty.php");
            } 
            // Jika ada inputan, isi akan ditampilkan
            else {
                echo "Nama : $name<br>";
                echo "Email : $email<br>";
                date_default_timezone_set("Asia/Jakarta");
                echo date("H:i:s a | l, j F Y");
            }
        }
    ?>
</body>
</html>