<?php
include "BackEnd/DickJerkOffAlgorithm.php";
$DickJoffAlg = new DickJerkOffAlgorythm();

if (isset($_POST["HumanDick-submit"])) {
    $DickJoffAlg->ReturnTime();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dick guesser </title>
    <link rel="stylesheet" href="PageStyle.css">
</head>

<body class="body">

    <div class="Panel">
        <form method="post">
            <input type="text" name="PeopleToJerkOff" placeholder="insert people to jerkoff" />
            <button type="submit" name="HumanDick-submit">Submin</button>
        </form>
    </div>

</body>

</html>