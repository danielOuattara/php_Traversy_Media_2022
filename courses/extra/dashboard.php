<?php
session_start();

if (!isset($_SESSION["username"])) {
    die('You must be logged in');
}
echo "<pre>";
echo $_SESSION["username"];
echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1> Welcome ", $_SESSION['username'], " </h1>";
    echo '<a href="./logout.php">Logout</a>';
    ?>
</body>

</html>
<?
?>