<?php
    require '../koneksi.php';
    $kode = $_GET['kode_prodi'];
    $result = mysqli_query($conn, "DELETE FROM prodi WHERE kode_prodi='$kode'");
    header('location: tampil_data.php');
?>
