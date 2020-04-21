<?php
/**
 * project_name : kuliah_online_1
 * author : krisnanto
 * licence : K15
 */

$mysqlnd = function_exists('mysqli_fetch_all');
if ($mysqlnd) {
    // echo 'mysqlnd enabled!';
} else {    
    echo 'mysqlnd disabled!';
}

$hostname = "db";
$username = "user";
$password = "test";
$db       = "myDb";

$conn = mysqli_connect($hostname, $username, $password, $db);

?>