<?php
    require '../koneksi.php';
    $result = mysqli_query($conn, "SELECT * FROM admin");
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
          <td>Username</td>
          <td>Aksi</td>  
        </tr>
        <?php
            while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $data['username'] ?></td>
                        <td>
                            <a href="edit_data.php?id=<?php echo $data['id'] ?>">Edit Password</a>
                            <a href="hapus_data.php?id=<?php echo $data['id'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>