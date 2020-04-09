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
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td>
                    <select name="prodi">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tahun Masuk</td>
                <td>:</td>
                <td><input type="text" name="tahun_masuk"></td>
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

<?php
require 'koneksi.php';
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $tahun_masuk = $_POST['tahun_masuk'];

    $result = mysql_query($conn, "INSERT INTO mahasiswa(nim, nama, prodi, tahun_masuk) VALUES ('$nim', '$nama', '$prodi', '$tahun_masuk') ");

    header('location: tampil_data.php');
}
