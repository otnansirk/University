<?php

$motor = 2000;
$sepeda = 1000;


$lamaParkir = ($_POST['lama_parkir'])? $_POST['lama_parkir']: 0;
$bayar = ($_POST['bayar'])? $_POST['bayar']: 0;
$noPlat = ($_POST['plat_nomor'])? $_POST['plat_nomor']: '';
$jenisKendaraan = ($_POST['kendaraan'])? $_POST['kendaraan']: '';
$total = 0;
$kembalian = 0;

if ($_POST['submit']) {

    switch ($jenisKendaraan) {
        case 'mobil':
            $total = parkir_mobil($lamaParkir, $jenisKendaraan);
            break;
        case 'motor':
            $total = parkir_motor($lamaParkir, $jenisKendaraan);
            break;
        case 'sepeda':
            $total = parkir_sepeda($lamaParkir, $jenisKendaraan);
            break;
        
        default:
            $total = 0;
            break;
    }
    $kembalian = $bayar - $total;
}

function parkir_mobil($lamaParkir, $jenis)
{
    $total = 3000;
    if ($lamaParkir >= 2) {
        for ($i=1; $i < $lamaParkir; $i++) { 
            $total += 2000;
        }
    }

    return $total;
}

function parkir_motor($lamaParkir, $jenis)
{
    $total = 2000;
    if ($lamaParkir >= 2) {
        for ($i=1; $i < $lamaParkir; $i++) { 
            $total += 1000;
        }
    }

    return $total;
}

function parkir_sepeda($lamaParkir, $jenis)
{
    $total = 1000;
    return $total;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modul 3 | Parkir App</title>
</head>

<body style="width:50%; margin: 100px auto;">
    <form action="" method="post">
        <fieldset>
        <legend>Aplikasi kasir</legend>
        <table>
            <tr>
                <td>
                    <label>No. Plat</label>
                </td>
                <td>
                    <input type="text" name="plat_nomor">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Jenis Kendaraan</label>
                </td>
                <td>
                    <select name="kendaraan">
                        <option value="sepeda">Sepeda</option>
                        <option value="motor">Motor</option>
                        <option value="mobil">Mobil</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Lama parkir</label>
                </td>
                <td>
                    <input type="number" name="lama_parkir">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Bayar</label>
                </td>
                <td>
                    <input type="number" name="bayar">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
        </fieldset>
    </form>
    <hr>
    <?php
        if ($kembalian < 0) {
            echo "MAAF UANG KURANG.";
        } else {
    ?>
    <fieldset>
        <legend>Detail Pembayaran</legend>
        <table>
            <tr>
                <td>
                    <label>No. Plat</label>
                </td>
                <td>:</td>
                <td>
                     <?= $noPlat ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Jenis Kendaraan</label>
                </td>
                <td>:</td>
                <td>
                    <?= $jenisKendaraan ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Lama parkir</label>
                </td>
                <td>:</td>
                <td>
                    <?= $lamaParkir ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Total Bayar</label>
                </td>
                <td>:</td>
                <td>
                    <?= $total ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Bayar</label>
                </td>
                <td>:</td>
                <td>
                    <?= $bayar ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Kembalian</label>
                </td>
                <td>:</td>
                <td>
                    <?= abs($kembalian) ?>
                </td>
            </tr>
        </table>
    </fieldset>
    <?php   
        }
    ?>
</body>

</html>