<?php
include_once("config.php");
$card_id = $_POST['card_id'];
$book_id = $_POST['bookID'];
$user_id = $_POST['user_id'];

$query = "insert into issued_books(BOOK_ID_NO,USER_ID,CARD_ID,ISSUED_DATE,RETURN_DATE) values
		 (" . $book_id . ",'" . $user_id . "','" . $card_id . "',now(),DATE_ADD(now(),
		  INTERVAL 2 MONTH))";
$result = mysql_query($query);

$query = "UPDATE card_detail set ISSUED = 'Y' where CARD_ID = '" . $card_id . "'";
$result_1 = mysql_query($query);

$query = "UPDATE books set popularity = popularity+1, in_rack = in_rack-1 where BOOK_ID_NO = " . $book_id;
$result_2 = mysql_query($query);
header("location:search_book.php?m=1");



