<?php

$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; // Mysql password
$db_name = "library"; // Database name


//Connect to server and select database.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name", $con)or die("cannot select DB");