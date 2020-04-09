
<?php

    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $suhu = $_POST['suhu']; // celcius

        $celcius = $suhu. " Celcius";
        $fahrenheit = 9/5 * $suhu + 32 . " Fahrenheit";
        $reamur = 4/5 * $suhu. " Reamur";
        $kelvin = 273 + $suhu. " Kelvin";

        if (($suhu > 38) && ($suhu < 29)) {
            $message = "Aku sarankan anda tidur dan istirahat jangan lupa minum obat demam";
        } else {
            $message = "Anda sehat";
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suhu</title>
</head>
<body>
    <fieldset>
        <legend>Form Data</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <td>Suhu Badan</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="suhu">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <br>
    <br>
    <?php
        if(isset($_POST['submit'])){
    ?>
        <fieldset>
            <legend>Hasil Konversi Data</legend>
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <?= (isset($nim))? $nim: '' ?>
                    </td>
                </tr>
                <tr>
                    <td>Suhu Badan</td>
                    <td>:</td>
                    <td>
                    </td>
                </tr>
            </table>
            <ul>            
                <li>
                    <?= (isset($celcius))? $celcius: '' ?>
                </li>
                <li>
                    <?= (isset($fahrenheit))? $fahrenheit: '' ?>
                </li>
                <li>
                    <?= (isset($kelvin))? $kelvin: '' ?>
                </li>
                <li>
                    <?= (isset($reamur))? $reamur: '' ?>
                </li>
            </ul>
            <h4>
                <?= (isset($message))? $message: '' ?>
            </h4>
        </fieldset>
    <?php
        }
    ?>
</body>
</html>

