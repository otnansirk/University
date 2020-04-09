<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modul 3 | Perbandingan nilai</title>
</head>

<body style="width:50%; margin: 100px auto;">
  <form action="dynamic_proses.php" method="post">
    <fieldset>
      <legend>Perbandingan Nilai</legend>
      <table>
        <tr>
          <td>
            <label>Nilai A</label>
            <input type="number" name="a">
          </td>
        </tr>
        <tr>
          <td>
            <label>Nilai B</label>
            <input type="number" name="b">
          </td>
        </tr>
        <tr>
          <td>
            <?= (isset($_GET['g'])? "Hasil Perbandingan : ".$_GET['g']: '' ) ?>
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="submit" value="Bandingkan">
          </td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>

</html>