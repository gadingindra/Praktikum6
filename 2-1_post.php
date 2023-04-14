<html>
<head>
    <title>Post</title>
</head>
<body>
    <form action="2-1-2_postAct.php" method="post">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
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
</body>
</html>