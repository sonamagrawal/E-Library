<!DOCTYPE HTML>
<?php   ini_alter('date.timezone','Asia/Calcutta');

include_once("config.php");
$issue_id = $_POST['issue'];

$query = "select issued_books.book_id_no,title,user_name,card_id,return_date from issued_books join books on
          issued_books.book_id_no = books.book_id_no join login on
          issued_books.user_id = login.user_id  where issue_code = " . $issue_id . " and returned = 'N' ";
$result = mysql_query($query);

if (mysql_num_rows($result) == 0) {
	header("location:return-book.php?m=0");
}
$row = mysql_fetch_array($result);

if (date('Y-m-d ', strtotime($row['return_date'])) > date('Y-m-d '))
	$fine = 0;
else {
	$interval = date_create($row['return_date'])->diff(date_create("now"));
	$fine = (($interval->y) * 365) + (($interval->m) * 30) + (($interval->d) * 1);
}
?>
<html>
	<head>
		<title> E-LIBRARY |ISSUE </title>
		<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="span9 well" style="border:1px solid black;font-size: 16px">
				<div class="row-fluid">
					<div class="row-fluid">
						<div class="span12" style="background-color: #808080">
							<h2><strong>CONFIRM BOOK RETURN</strong></h2>
						</div>
					</div>
					</br>
					<form action="return!.php" method="POST">
						<div class="row-fluid">
							<div class="span4">
								<b>Book ID : </b> <?php echo $row['book_id_no']?>
							</div>
							<div class="span4">
								<b>Title : </b> <?php echo $row['title']?>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<b>User Name : </b> <?php echo $row['user_name']?>
							</div>
							<div class="span4">
								<b>Card ID : </b> <?php echo $row['card_id']?>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<b>Return Date : </b> <?php echo $row['return_date']?>
							</div>
							<div class="span4">
								<b>Returned On : </b> <?php echo date('Y-m-d H:i:s')?>
							</div>
						</div>
						</br>
						<hr>
						<div class="row-fluid">
							<div class="span2">
								<button id="comfirm" type="submit" class="btn btn-large btn-success"
								        name="confirm"><i class="icon-ok"></i>CONFIRM
								</button>
							</div>
							<div class="span2">
								<button type="button" class="btn btn-large btn-warning" name="cancel"
								        onclick="javascript:history.go(-1)">
									<i class="icon-remove"></i>CANCEL
								</button>
							</div>
							<input type="hidden" name="issueID" value='<?php echo $issue_id ?>'>
							<input type="hidden" name="fine" value='<?php echo $fine ?>'>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>