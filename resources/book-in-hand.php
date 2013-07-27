<!DOCTYPE HTML>
<?php
include_once("config.php");
$_SESSION['u_id'] = '1';

$query = "select title,author,company,published_year,issued_date,return_date from books join issued_books
            on books.book_id_no = issued_books.book_id_no where issued_books.user_id = '" . $_SESSION['u_id'] . "' and issued_books.returned = 'N'";
$result = mysql_query($query);
?>
<html>
	<head>
		<!--		<title> E-LIBRARY |BOOK </title>-->
		<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12" style="background-color: #808080">
					<h2><strong>BOOKS IN HAND</strong></h2>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<table class="table table-hover">
						<thead style="background: peru">
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Author</th>
								<th>Company</th>
								<th>Published On</th>
								<th>Issued-Date</th>
								<th>Return-Date</th>
							</tr>
						</thead>
						<tbody>
							<?php $counter = 0;
							while ($row = mysql_fetch_array($result)) {
								$counter++;
								$status = date('Y-m-d ', strtotime($row['return_date'])) < date('Y-m-d ') ? 'warning' : 'success';
								echo "<tr class='" . $status . "'>
						                                            <td>" . $counter . "</td>
						                                            <td>" . $row['title'] . "</td>
						                                            <td>" . $row['author'] . "</td>
						                                            <td>" . $row['company'] . "</td>
						                                            <td>" . $row['published_year'] . "</td>
						                                            <td>" . $row['issued_date'] . "</td>
						                                            <td>" . $row['return_date'] . "</td>
						                                            </tr>";
							}?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>