<?php
$title = "Index";
require_once("functions.php");
session_start();
$data = get_data("");
view("index", $title);
?>