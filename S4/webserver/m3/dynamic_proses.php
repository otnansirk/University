<?php

$submit = $_POST['submit'];

if ($submit) {
    $a = $_POST['a'];
    $b = $_POST['b'];    
}

if($a < $b){
    $nilai = "Nilai Variabel A lebih Kecil";
} elseif ($a > $b) {
    $nilai = "Nilai Variabel A Lebh Besar";
} else {
    $nilai = "Nilai kedua variabel sama";
}

header("Location: ". 'http://localhost:3000/AKAKOM/webserver/m3/?g='. $nilai);