<?php
    require '../koneksi.php';
    $nim = $_GET['nim'];
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$nim'");
    $data = mysqli_fetch_assoc($result);
    $prodi = mysqli_query($conn, "SELECT * FROM prodi");

    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $tahun_masuk = $_POST['tahun_masuk'];

        $result = mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', prodi='$prodi', tahun_masuk='$tahun_masuk' WHERE nim='$nim' ");

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
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $data['nim'] ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td>
                    <select name="prodi">
                        <?php foreach ($prodi as $key => $value) {
                            if($value['kode_prodi'] == $data['prodi']){
                                ?>
                                    <option value="<?=$value['kode_prodi']?>" selected><?=$value['nama_prodi']?></option>
                                <?php
                            } else {
                                ?>
                                    <option value="<?=$value['kode_prodi']?>"><?=$value['nama_prodi']?></option>
                                <?php
                            }
                        } ?>    
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tahun Masuk</td>
                <td>:</td>
                <td><input type="text" name="tahun_masuk" value="<?php echo $data['tahun_masuk'] ?>"></td>
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
