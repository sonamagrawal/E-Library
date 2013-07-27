<!DOCTYPE HTML>
<?php
include_once("config.php");
if (empty($_POST['book_id'])) {
	header("location:javascript://:history.go(-1)");
}

$book_id = $_POST['book_id'];
$roll_no = $_POST['rollno'];

$query = "select card_id,card_detail.user_id as user_id from card_detail join login on login.user_id = card_detail.user_id
          where login.user_name = '" . $_POST['rollno'] . "' and card_detail.ISSUED='N'";
$result_card = mysql_query($query);

if (mysql_num_rows($result_card) == 0)
	header("location:search_book.php?m=0");

$query = "select title,author,company,published_year,category.name as name from books join category on
		  books.category_id = category.category_id where book_id_no ='" . $book_id . "'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<html>
	<head>
		<!--        <title> E-LIBRARY |ISSUE </title>-->
		<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12" style="background-color: #808080">
					<h2><strong>CONFIRM BOOK ISSUE</strong></h2>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12 well">
					</br>
					<form action="issued!.php" method="POST">
						<div class="row-fluid">
							<div class="span4">
								<b>Title : </b> <?php echo $row['title']?>
							</div>
							<div class="span4">
								<b>Author : </b> <?php echo $row['author']?>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<b>Category : </b> <?php echo $row['name']?>
							</div>
							<div class="span4">
								<b>Company : </b> <?php echo $row['company']?>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<b>Published On : </b> <?php echo $row['published_year']?>
							</div>
							<div class="span4">
								<b>Card ID : </b>
								<select required size=1 name="card_id">
									<?php
									$user_id = 0;
									while ($row_card = mysql_fetch_array($result_card)) {
										echo  "<option>" . $row_card['card_id'] . "</option>";
										$user_id = $row_card['user_id'];
									}
									?>
								</select>
							</div>
						</div>
						<input type="hidden" name="user_id" value="<?php echo $GLOBALS['user_id']?>">
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
							<input type="hidden" name="bookID" value='<?php echo $book_id ?>'>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>