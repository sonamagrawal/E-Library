<!DOCTYPE HTML>
<?php
include_once("config.php");
$_SESSION['u_id'] = '1';
$fine_query = "select title,author,returned_on,return_date,fine_detail.fine as fine from issued_books join
			   books on issued_books.book_id_no = books.book_id_no join fine_detail on
               issued_books.issue_code = fine_detail.issue_code where
               issued_books.user_id = '" . $_SESSION['u_id'] . "'and issued_books.fine = 'Y' and
               fine_detail.paid = 'N'";
$result_fine = mysql_query($fine_query);
?>
<html>
	<head>
		<title> E-LIBRARY |FINE </title>
		<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12" style="background-color: #808080">
					<h2><strong>FINE DETAIL</strong></h2>
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
								<th>Return Date</th>
								<th>Returned On</th>
								<th>Fine</th>
							</tr>
						</thead>
						<tbody>
							<?php $counter = 0;
							while ($row1 = mysql_fetch_array($result_fine)) {
								$counter++;
								echo "<tr class='warning'>
						                                            <td>" . $counter . "</td>
						                                            <td>" . $row1['title'] . "</td>
						                                            <td>" . $row1['author'] . "</td>
						                                            <td>" . $row1['return_date'] . "</td>
						                                            <td>" . $row1['returned_on'] . "</td>
						                                            <td>" . $row1['fine'] . "</td>
						                                            </tr>";
							}?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>