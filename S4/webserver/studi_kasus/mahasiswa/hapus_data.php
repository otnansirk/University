<?php
    require '../koneksi.php';
    $nim = $_GET['nim'];
    $result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim='$nim'");
    header('location: tampil_data.php');
?>
