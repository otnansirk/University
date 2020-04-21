<?php
session_start();
echo "<h3>Implementasi session</h3>";

if (isset($_SESSION['id'])) {
    echo "<b> ANDA SUDAH LOGIN</b>.<br>Hallo selamat datang kembali ". $_SESSION['name'];
} else {
    echo "<b>ANDA BELUM LOGIN</b>. <br>Silahkan login terlebih dahulu atau buat akun dengan klik tombol register.";
}
?>
<br><br>
<a href="login.php">Login</a> | 
<a href="register.php">Register</a> | 
<a href="logout.php">Logout</a>
