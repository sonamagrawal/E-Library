<?php
include_once("config.php");
$name = strtoupper(trim($_POST['name']));

$query = "insert into category (name) values ('" . $name . "')";
mysql_query($query);

header("location:add_category.php");