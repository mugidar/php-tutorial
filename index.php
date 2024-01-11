<?php
require_once("requires.php");

$title = "Index";
session_start();
 $json = get_data();
 $terms = json_decode($json);
view("index", $data);
?>