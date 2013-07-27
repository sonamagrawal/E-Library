<?php
include_once("config.php");
$user_id = $_POST['userID'] ;

$query = "Update fine_detail join issued_books on issued_books.issue_code = fine_detail.issue_code
          set paid = 'Y' where issued_books.user_id = ".$user_id." and fine_detail.paid = 'N'" ;
$result = mysql_query($query);
header("location:due_clearance.php?m=1");