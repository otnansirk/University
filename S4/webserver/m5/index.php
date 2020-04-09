<?php

$knim = '';
$knama = '';
$kemail = '';

$anim = '';
$anama = '';
$aemail = '';

$submit = false;
$data = [];
if ($_POST['submit']) {
    $knim = $_POST['nim_ketua'];
    $knama = $_POST['nama_ketua'];
    $kemail = $_POST['email_ketua'];
    
    $anim = $_POST['nim_anggota'];
    $anama = $_POST['nama_anggota'];
    $aemail = $_POST['email_anggota'];
    
    $data = [
        'anggota' => [
            [
                'nama' => $anama,
                'nim' => $anim,
                'email' => $aemail
            ]
        ],
        'ketua' => [
            [
                'nama' => $knama,
                'nim' => $knim,
                'email' => $kemail
            ]
        ]
    ];


    $submit = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modul 5 | Input data kelompok</title>
</head>

<body style="width:50%; margin: 100px auto;">
    <h5>Input data anggota kelompok</h5>
    <form action="" method="post">
        <fieldset>
        <legend>Ketua kelompok</legend>
        <table>
            <tr>
                <td>
                    <label>NIM</label>
                </td>
                <td>
                    <input type="text" name="nim_ketua">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nama</label>
                </td>
                <td>
                    <input type="text" name="nama_ketua">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email</label>
                </td>
                <td>
                    <input type="text" name="email_ketua">
                </td>
            </tr>
        </table>
        </fieldset>

        <fieldset>
        <legend>Anggota kelompok</legend>
        <table>
            <tr>
                <td>
                    <label>NIM</label>
                </td>
                <td>
                    <input type="text" name="nim_anggota">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nama</label>
                </td>
                <td>
                    <input type="text" name="nama_anggota">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email</label>
                </td>
                <td>
                    <input type="text" name="email_anggota">
                </td>
            </tr>
        </table>
        </fieldset>
        <input type="submit" name="submit" value="Simpan">
    </form>
    <br>
    <?php
        if (count($data) > 0) {
            ?>
                <fieldset>
                    <legend>Data yang sudah disimpan</legend>
                    <?php
                        foreach ($data as $key => $value) {
                            ?><h4><?=$key?></h4><?php
                            foreach ($value as $key => $item) {
                                foreach ($item as $key => $user) {
                                    ?>
                                        <ul>
                                            <li><?=$key?> = <?=$user?></li>
                                        </ul>
                                    <?php
                                }
                            }
                        }
                    ?>
                </fieldset>
            <?php
        }
    ?>
</body>

</html>