<?php

$file = $_FILES['gambar']['tmp_name'];
$tujuan = $_FILES['gambar']['name'];
move_uploaded_file($file, $tujuan);
echo "File Telah Diupload";