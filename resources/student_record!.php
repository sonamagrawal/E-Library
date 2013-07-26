<?php
include_once("config.php");
$roll_no = strtoupper(trim($_POST['rollno']));
$first_name = strtoupper(trim($_POST['firstname']));
$last_name = strtoupper(trim($_POST['lastname']));
$enrollment_no = strtoupper(trim($_POST['enrollmentno']));
$branch = strtoupper(trim($_POST['branch']));
$semester = strtoupper(trim($_POST['semester']));

$query = "insert into student_record (roll_no,first_name,last_name,enrollment_no,branch,semester)values
        ('" . $roll_no . "','" . $first_name . "','" . $last_name . "','" . $enrollment_no . "','" .
	     $branch . "'," . $semester . ")";
mysql_query($query);

$insert_login = "insert into login(user_name, password) values('" . $roll_no . "',md5('" . $enrollment_no . "'))";
mysql_query($insert_login);
$user_id = mysql_insert_id() ;

$insert_card_id = "insert into card_detail(user_id) values (".$user_id."), (".$user_id.")" ;
mysql_query($insert_card_id);

header("location:student_record.php");
