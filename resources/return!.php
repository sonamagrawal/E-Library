<?php
include_once("config.php");
$issue_id = $_POST['issueID'];
$fine = $_POST['fine'];

if ($fine > 0) {
	$update_issue_table = "UPDATE issued_books join card_detail on issued_books.card_id = card_detail.card_id
                           join books on issued_books.book_id_no = books.book_id_no set returned = 'Y',
                           returned_on = now(),card_detail.issued = 'N', books.in_rack = books.in_rack + 1,
                           issued_books.Fine = 'Y' where issued_books.issue_code = '" . $issue_id . "'";

	$insert_fine = "insert into fine_detail(ISSUE_CODE,FINE) values(" . $issue_id . "," . $fine . ")";
	$result = mysql_query($update_issue_table);
	$result_1 = mysql_query($insert_fine);
} else {
	$update_table = "UPDATE issued_books join card_detail on issued_books.card_id = card_detail.card_id
                           join books on issued_books.book_id_no = books.book_id_no set returned = 'Y',
                           returned_on = now(),card_detail.issued = 'N', books.in_rack = books.in_rack + 1
                           where issued_books.issue_code = '" . $issue_id . "'";
	$result_2 = mysql_query($update_table);
}

header("location:search_book.php");



