<?php
    require '../koneksi.php';
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE id='$id'");
    $data = mysqli_fetch_assoc($result);

    if (isset($_POST['submit'])) {
        $id = $_GET['id'];
        $pass = md5($_POST['password']);
        
        $result = mysqli_query($conn, "UPDATE admin SET password='$pass' WHERE id='$id' ");

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
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" value=""></td>
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
