<?php

$judul_film = [
	"1"=> "Mahardika arya",
	"2"=> "Cinta bertasbih",
	"3"=> "Ugal ugalan",
	"4"=> "Yowes Ben",
	"5"=> "Cantik tapi palsu",
	"6"=> "Arwah",
	"7"=> "Spiderman III",
	"8"=> "Gwntayangan"
];

if (
    strtolower($_POST['hari']) == 'senin' ||
    strtolower($_POST['hari']) == 'selasa' ||
    strtolower($_POST['hari']) == 'rabu' ||
    strtolower($_POST['hari']) == 'kamis'
    ) {
        $harga_tiket = 25000;
} else if (strtolower($_POST['hari']) == 'jumat') {
    $harga_tiket = 30000;
} else if (
    strtolower($_POST['hari']) == 'sabtu' ||
    strtolower($_POST['hari']) == 'minggu' 
    ) {
    $harga_tiket = 40000;
} else {
    $harga_tiket = 0;
}

$harga_tiket = $harga_tiket * $_POST['jumlah'];
$judul_film  = $judul_film[$_POST['studio']];
$nama        = $_POST['nama'];
$jk          = $_POST['jk'];
$studio      = $_POST['studio'];
$jumlah      = $_POST['jumlah'];
$hari        = $_POST['hari'];

?>

<html>

<head>
    <style type="text/css">
        th {
            text-align: center;
        }
        
        table.center {
            margin-left: auto;
            margin-right: auto;
        }
        
        .button {
            width: 150px;
            text-align: center;
            margin: 0 auto;
        }
    </style>
    <title>Tiket Bioskop Online</title>
</head>

<body>
    <table border="0" class="center">
        <tr>
            <th colspan="3">Pemesan Tiket Bioskop Anda sebagai berikut<th>
            <tr></tr>
        </tr>

        <tr>
            <td>Nama Pemesan</td>
            <td> : </td>
            <td><?=$nama ?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td><?=$jk?></td>
        </tr>

        <tr>
            <td>Studio</td>
            <td> : </td>
            <td><?=$studio?></td>
        </tr>
        <tr>
            <td>Judul Film</td>
            <td> : </td>
            <td><?=$judul_film?></td>
        </tr>
        <tr>
            <td>Hari</td>
            <td> : </td>
            <td><?=$hari?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td> : </td>
            <td><?=$jumlah?></td>
        </tr>
        <tr>
            <td>Harga tiket</td>
            <td> : </td>
            <td>Rp. <?= number_format($harga_tiket) ?></td>
        </tr>
    </table>
</body>
</html>
