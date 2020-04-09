<?php

$nama = $_POST['nama'];
$foto = $_FILES['foto']['name'];
$alama = $_POST['alama'];
$kelamin = $_POST['kelamin'];
$umur = $_POST['umur'];
$email = $_POST['email'];
$website = $_POST['website'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];


$ekstensi_file    =array('png', 'jpg', 'jpeg');
$ekstensi        =strtolower(end(explode('.', $foto)));
$ekstensi_ok    =in_array($ekstensi, $ekstensi_file);
 if(!($ekstensi_ok)){
    echo "Ekstensi type file tidak diijinkan upload <br>";
}
else {
    echo "Ekstensi type file diijinkan upload<br>";
}    

echo "<br>";


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Format email anda masih salah";
}
else {
    echo "Format email sudah benar";
}

echo "<br>";
echo "<br>";

if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
    echo "Format website salah";
} else {
    echo "Format url sudah benar";
}

echo "<br>";
echo "<br>";


if ($password == $repassword) {
    echo "Password tidak boleh kosog<br>";
}elseif ($password == $repassword) {
    echo "password cocok";
} else {
    echo "password tidak cocok";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo 'nama : '. $nama.'<br>';
echo 'foto : '. $foto.'<br>';
echo 'alama : '. $alama.'<br>';
echo 'kelamin : '. $kelamin.'<br>';
echo 'umur : '. $umur.'<br>';
echo 'email : '. $email.'<br>';
echo 'website : '. $website.'<br>';
echo 'username : '. $username.'<br>';
echo 'password : '. $password.'<br>';
echo 'repassword : '. $repassword.'<br>';


