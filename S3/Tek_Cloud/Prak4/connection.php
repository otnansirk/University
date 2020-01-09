<?php

$server = "db4free.net";
$username = "krisnanto";
$password = "krisnanto";
$dbname = "tcloud_prak4";

try {
    $DB = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "DB Connected \n";
} catch (\PDOException $e) {
    echo "Connecting... ".$e->getMessage();    
}













