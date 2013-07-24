<?php
include_once("config.php");
$first_name = strtoupper(trim($_POST['firstname']));
$last_name = strtoupper(trim($_POST['lastname']));
$enrollment_no = strtoupper(trim($_POST['enrollmentno']));
$roll_no = strtoupper(trim($_POST['rollno']));
$branch = strtoupper(trim($_POST['branch']));
$semester = strtoupper(trim($_POST['semester']));

$query="insert into student_record (first_name,last_name,enrollment_no,roll_no,branch,semester)values
         ('" . $first_name . "','" . $last_name . "','" . $enrollment_no . "','" . $roll_no . "','" . $branch . "'
         ,'" . semester. "')";
$result=mysql_query("$query");
header("location:student_record.php");