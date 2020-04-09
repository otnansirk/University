<?php

$email = $_POST['email'];
echo "data input : $email <br>";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Format email anda masih salah";
}
else {
    echo "Format email sudah benar";
}

echo "<br>";
echo "<br>";

$website = $_POST['website'];

if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
    echo "Format website salah";
} else {
    echo "Format url sudah benar";
}
