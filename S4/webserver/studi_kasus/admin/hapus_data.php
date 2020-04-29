<?php
    require '../koneksi.php';
    $id = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM admin WHERE id='$id'");
    header('location: tampil_data.php');
?>
