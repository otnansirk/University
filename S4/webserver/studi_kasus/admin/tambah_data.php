<?php
require '../koneksi.php';
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $result = mysqli_query($conn, "INSERT INTO admin(username, password) VALUES ('$user', '$pass')");
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
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
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
