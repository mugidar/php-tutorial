<?php include_once("templates/header.php"); ?>

<?php
$title = "Ad ";
require_once("functions.php");
session_start();
check_is_authed();
view("admin", $title);
echo $_SESSION['username'];

?>