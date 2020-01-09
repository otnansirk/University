<?php

include_once "connection.php";

if (isset($_POST['save'])) {
    echo "GOOD";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prak 4</title>
</head>
<body>
    <form action="" method="post">
        <div class="form-input">
            Quote : <input type="text" name="quote">
        </div>
        <div class="form-input">
            Creator : <input type="text" name="creator">
        </div>
        <div class="form-button" >
            <button type="reset">Reset</button>
            <button type="submit" name="save" >Save</button>
        </div>
    </form>

<div class="content-quotes">
    <fieldset>
        <legend>Quote</legend>
        <p>ISI QUOTE</p>
        <p>Creator : KRISNANTO</p>
    </fieldset>
</div>


</body>
</html>