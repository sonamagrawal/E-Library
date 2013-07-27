<?php
include_once("config.php");
$user_name = strtoupper(trim($_POST['username']));
$pwd = strtoupper(trim($_POST['password']));

$select_user = "Select user_id,user_type from login where user_name = '" . $user_name . "' and
				password = md5(" . $pwd . ")";
$user = mysql_query($select_user);

if (mysql_num_rows($user) > 0) {
	$row = mysql_fetch_array($user);

	session_start();
	$_SESSION['u_id'] = $row['user_id'];

	if ($row['user_type'] == 'A')
		header("location:admin.php");
	else
		header("location:profile.php");

} else {
	header("location:javascript://:history.go(-1)");
}

