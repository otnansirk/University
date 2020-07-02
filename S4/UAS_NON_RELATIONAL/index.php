<?php
    include "helper/Helper.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Krisnanto | UAS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <div class="sidenav">
        <center><h2>UAS</h2></center>
        <a href="?p=dashboard">Dashboard</a>
        <a href="?p=stok/index">Stok</a>
        <a href="?p=barang/index">Barang</a>
        <a href="?p=supplier/index">Supplier</a>
    </div>

    <div class="main">
        <?php
            if (isset($_GET['p'])) {
                include 'pages/'.$_GET['p'].'.php';
            } else {
                include 'pages/dashboard.php';
            }
        ?>
        <div class="footer">
            <h5>Aplikasi sederhana cek stok &copy; Andi&Kris</h5>
        </div>
    </div>
    </body>
</html> 
