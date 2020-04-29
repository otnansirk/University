<?php
session_start();


if (isset($_SESSION['id']) && isset($_COOKIE['id'])) {
    echo "<b> ANDA SUDAH LOGIN</b>.<br>Hallo selamat datang kembali ". $_SESSION['name'];
    ?>
        <html>
        <ul>
            <li><a href="prodi/tampil_data.php">Prodi</a></li>
            <li><a href="mahasiswa/tampil_data.php">Mahasiswa</a></li>
            <li><a href="admin/tampil_data.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        </html>
    <?php
} else {
    echo "<b>ANDA BELUM LOGIN</b>. <br>Silahkan login terlebih dahulu.<br>";
    echo "Pertama login pake username : krisnanto pass: krisnanto";
    ?>
        <a href="login.php">Login</a> | 
    <?php
}
?>