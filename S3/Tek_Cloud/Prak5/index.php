<?php

include_once "connection.php";
// if (isset($_POST['save'])) {
//     $quote = $_POST['quote'];
//     $creator = $_POST['creator'];
    
//     try {
//         $insert = $DB->prepare("INSERT INTO quotes (creator, quote) VALUES (?,?)");
//         $insert->execute([$creator, $quote]);
//         echo "Add new quote successfully.";
//     } catch (\Throwable $th) {
//         echo $th->getMessage();
//     }
// }

try {
    $quotes = $db->quotes->find();
} catch (\Throwable $e) {
    // echo "Error Get Data from DB ". $e->getMessage;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Prak 4</title>
</head>
<body>

<center>
    <h3>Make Quote With Me</h3>
</center>
<div class="container">
    <form action="" method="POST">
        <label for="fname">Creator</label>
        <input type="text" name="creator" placeholder="Your name.." required>

        <label for="lname">Quote</label>
        <input type="text" name="quote" placeholder="Your quote" required>

        <input type="reset" value="Reset">
        <input type="submit" value="Submit" name="save">
    </form>
</div>


<center>
    <h3>Quotes</h3>
</center>

<div class="container">
 
</div>
</body>
</html>