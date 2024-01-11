<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $someText ?>
    </title>
</head>

<body>
    <header>
        Header of the
        <?= $model ?> page <br />
        <a href="/practice/index.php">Home</a>
        <a href="/practice/admin.php">Admin</a>
        <?php
        session_start();
        if (isset($_SESSION["username"])) {
            echo "<a href='logout.php'>Log out</a>";
        } else {
            echo "<a href='./login.php'>Log in account</a>";
        }
        ?>
    </header>

    
    <?php require("$name.view.php") ?>

    <footer>
    <h1><?= $model ?> Footer </h1>
</footer>
</body>

</html>