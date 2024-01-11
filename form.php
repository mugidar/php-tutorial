<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
     $phone = filter_input(INPUT_POST, "number", FILTER_SANITIZE_STRING);

    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['number'] = $phone;

    header("Location: http://localhost/practice");
    exit;
}
?>