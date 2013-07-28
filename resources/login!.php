<?php
include_once("config.php");
$user_name = strtoupper(trim($_POST['username']));
$pwd = strtoupper(trim($_POST['password']));

$select_user = "Select user_id,user_type,user_name from login where user_name = '" . $user_name . "'
				and password = md5(" . $pwd . ")";
$user = mysql_query($select_user);

if (mysql_num_rows($user) > 0) {
	$row = mysql_fetch_array($user);

	session_start();
	$_SESSION['u_id'] = $row['user_id'];
	$user_name = $row['user_name'];

	if ($row['user_type'] == 'A') {
		get_name("admin_record", "employee_no");
		header("location:admin.php");
	} elseif ($row['user_type'] == 'S') {
		get_name("student_record", "roll_no");
		header("location:profile.php");
	} else {
		get_name("teacher_record", "employee_no");
		header("location:profile.php");
	}

} else {
	header("location:javascript://:history.go(-1)");
}
function get_name($table, $column)
{
	$query = "select first_name, last_name from " . $table . " where " . $column . "
			   = '" . $GLOBALS['user_name'] . "'";
	$res = mysql_query($query);
	$row = mysql_fetch_array($res);
	$_SESSION['name'] = ucfirst(strtolower($row['first_name'])) . " " . ucfirst(strtolower($row['last_name']));
}

