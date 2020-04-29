<?php
    require '../koneksi.php';
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa INNER JOIN prodi ON mahasiswa.prodi=prodi.kode_prodi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil data</title>
</head>
<body>
    <a href="tambah_data.php">Tambah data</a>
    <table border="1">
        <tr>
          <td>NIM</td>  
          <td>Nama</td>  
          <td>Prodi</td>  
          <td>Tahun Masuk</td>  
          <td>Aksi</td>  
        </tr>
        <?php
            while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $data['nim'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['nama_prodi'] ?></td>
                        <td><?php echo $data['tahun_masuk'] ?></td>
                        <td>
                            <a href="edit_data.php?nim=<?php echo $data['nim'] ?>">Edit</a>
                            <a href="hapus_data.php?nim=<?php echo $data['nim'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>