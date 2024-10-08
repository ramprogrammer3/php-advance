<?php

session_start();

print_r($_SESSION) . "<br>";
echo $_SESSION['favcolor'] . "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Favourite color  : " . $_SESSION['favcolor'];
    ?>
</body>
</html>