<?php
include_once("config.php");
$employee_no = strtoupper(trim($_POST['employeeno']));
$first_name = strtoupper(trim($_POST['firstname']));
$last_name = strtoupper(trim($_POST['lastname']));
$department = strtoupper(trim($_POST['department']));

$designation = strtoupper(trim($_POST['designation']));


$query = "insert into teacher_record (employee_no,first_name,last_name,department,designation)values
         ('" . $employee_no . "','" . $first_name . "','" . $last_name . "','" . $department . "','" . $designation . "'
         )";
$result = mysql_query("$query");
header("location:teacher_record.php");