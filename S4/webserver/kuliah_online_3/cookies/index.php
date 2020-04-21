<?php
session_start();
echo "<h3>Implementasi Cookie dengan fitur remember me waktu login</h3>";

if (isset($_SESSION['id']) || isset($_COOKIE['id'])) {
    echo "<b> ANDA SUDAH LOGIN</b>.<br>Hallo selamat datang kembali ";
} else {
    echo "<b>ANDA BELUM LOGIN</b>. <br>Silahkan login terlebih dahulu atau buat akun dengan klik tombol register.";
}
?>
<br><br>
<a href="login.php">Login</a> | 
<a href="register.php">Register</a> | 
<a href="logout.php">Logout</a>
