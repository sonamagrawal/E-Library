<?php
include_once("config.php");
$title = strtoupper(trim($_POST['title']));
$author = strtoupper(trim($_POST['author']));
$company = strtoupper(trim($_POST['company']));
$year = strtoupper(trim($_POST['year']));
$copies = strtoupper(trim($_POST['copies']));
$category = strtoupper(trim($_POST['category']));

function insert_book($category_id)
{
	$insert_book_details = "Insert into books (TITLE,AUTHOR,COMPANY,PUBLISHED_YEAR,COPIES,IN_RACK,CATEGORY_ID)
	                        values('" . $GLOBALS['title'] . "','" . $GLOBALS['author'] . "','" .
		$GLOBALS['company'] . "','" . $GLOBALS['year'] . "'," . $GLOBALS['copies'] . "," .
		$GLOBALS['copies'] . "," . $category_id . ")";
	mysql_query($insert_book_details);
}

$query = "select category_id from category where name = '" . $category . "'";
$result = mysql_query($query) or die("some error occured");
if (mysql_num_rows($result) == 0) {
	$insert_new_category = "Insert into category (name) values('" . $category . "')";
	$result1 = mysql_query($insert_new_category);
	$id = mysql_insert_id();
	insert_book($id);
} else {
	$row = mysql_fetch_array($result);
	insert_book($row['category_id']);
}
header("location:add_books.php");