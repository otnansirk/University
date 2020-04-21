<?php
require '../koneksi.php';
if (isset($_POST['submit'])) {
    $kode = $_POST['kode_prodi'];
    $nama = $_POST['nama_prodi'];

    $result = mysqli_query($conn, "INSERT INTO prodi(kode_prodi, nama_prodi) VALUES ('$kode', '$nama')");
    header('Location: tampil_data.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td><input type="text" name="kode_prodi"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_prodi"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
