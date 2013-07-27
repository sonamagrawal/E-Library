<?php
include_once("config.php");
$employee_no = strtoupper(trim($_POST['employeeno']));
$first_name = strtoupper(trim($_POST['firstname']));
$last_name = strtoupper(trim($_POST['lastname']));
$department = strtoupper(trim($_POST['department']));
$designation = strtoupper(trim($_POST['designation']));

$query = "insert into Admin_record (employee_no,first_name,last_name,department,designation)values
         ('" . $employee_no . "','" . $first_name . "','" . $last_name . "','" . $department . "','" .
		  $designation . "')";
mysql_query("$query");

$insert_login = "insert into login(user_name,user_type, password) values('" . $employee_no . "','A'
,md5('" . $employee_no . "'))";
mysql_query($insert_login);
header("location:admin_record.php?m=1");