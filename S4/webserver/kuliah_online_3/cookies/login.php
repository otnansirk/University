<?php
session_start();
require '../koneksi.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $remember_me = $_POST['remember_me'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE password='$password' AND username='$username'");
    $data = mysqli_fetch_array($result);
    if (is_array($data)) {
        if (isset($remember_me)) {
            $time = time()+3600;
            setcookie('id', $data['id'], $time);
            setcookie('name', $data['name'], $time);
        } else {
            $_SESSION['id'] = $data['id'];
            $_SESSION['name'] = $data['name'];
        }
        header('Location: index.php');
    } else {
        echo 'Username password salah';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
                <td><input type="checkbox" value="true" name="remember_me"> Remember me</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Login" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
