<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h1>Status Mahasiswa</h1>
    <hr>
    <h2>Form</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" name="nama" size="25"></td>  
            </tr>
            <tr>
                <td>NPM </td>
                <td>:</td>
                <td><input type="text" name="npm" size="25"></td>  
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <select name="prodi">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                        <option value="Desain Interior">Desain Interior</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Pendidikan Dokter">Pendidikan Dokter</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>:</td>
                <td>
                    <select name="fakultas">
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                        <option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
                        <option value="Arsitektur dan Desain">Arsitektur dan Desain</option>
                        <option value="Teknik">Teknik</option>
                        <option value="Kedokteran">Kedokteran</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status Mahasiswa</td>
                <td>:</td>
                <td>
                    <input type="radio" name="status"
                    value="Aktif" checked="">Aktif
                    <input type="radio" name="status"
                    value="Cuti" checked="">Cuti 
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $npm = $_POST['npm'];
            $prodi = $_POST['prodi'];
            $fakultas = $_POST['fakultas'];
            $status = $_POST['status'];
    ?>
    <h2>Hasil</h2>
    <table border="1" cellspacing="2" cellpadding="2">
            <tr>
                <td>Nama</td>
                <td>NPM</td>
                <td>Program Studi</td>
                <td>Fakultas</td>
                <td>Status</td>
            </tr>
            <tr>
                <td><?php echo $nama; ?></td>
                <td><?php echo $npm; ?></td>
                <td><?php echo $prodi; ?></td>
                <td><?php echo $fakultas; ?></td>
                <td><?php echo $status; ?></td>
            </tr>
    </table>
    <?php
        }
    ?>
</body>
</html>