<?php 
require_once("functions.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
</head>
<body>
    <header>
        Header of the <?= $title?> page <br/>
        <a href="/practice/index.php" >Home</a>
        <a href="/practice/admin.php" >Admin</a>
        <?php 
        session_start();
        if (isset($_SESSION["username"])) {
            echo "<a href='logout.php'>Log out</a>";
        } else {
            echo "<a href='./login.php'>Log in account</a>";
        }
        ?>
    </header>
