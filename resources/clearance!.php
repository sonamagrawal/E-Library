<?php
include_once("config.php");
$roll_no = $_POST['roll_no'] ;
$query = "Update student_record join issued_books on issued_books.user_id = student_record.user_id
		  join fine_detail on fine_detail.issue_code = issued_books.issue_code
		  set fine_detail.paid = 'Y'
		  where student_record.roll_no = '" . $roll_no . "' and issued_books.fine= 'Y'" ;
$result = mysql_query($query);
header("location:due_clearance.php?m=1");