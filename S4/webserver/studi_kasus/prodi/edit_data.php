<?php
    require '../koneksi.php';
    $kode = $_GET['kode_prodi'];
    $result = mysqli_query($conn, "SELECT * FROM prodi WHERE kode_prodi='$kode'");
    $data = mysqli_fetch_assoc($result);

    if (isset($_POST['submit'])) {
        $kode = $_POST['kode_prodi'];
        $nama = $_POST['nama_prodi'];
        
        $result = mysqli_query($conn, "UPDATE prodi SET nama_prodi='$nama' WHERE kode_prodi='$kode' ");

        header('location: tampil_data.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td><input type="number" name="kode_prodi" value="<?php echo $data['kode_prodi'] ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_prodi" value="<?php echo $data['nama_prodi'] ?>"></td>
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
