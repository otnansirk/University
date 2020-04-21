<?php
session_start();
session_destroy();
if(isset($_COOKIE['id']))
{
$time = time();
setcookie("id", '', $time - 3600);
setcookie("name", '', $time - 3600);
}
header("Location:index.php");
?>