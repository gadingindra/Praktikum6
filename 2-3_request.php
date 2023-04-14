<html>
<head>
    <title>Request</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['fname'];
            // Jika kosong, pesan teks di bawah ini akan muncul
            if (empty($name)) {
                echo "Name is empty";
            } 
            // Jika ada inputan, isi akan ditampilkan
            else {
                echo $name;
            }
        }
    ?>
</body>
</html>