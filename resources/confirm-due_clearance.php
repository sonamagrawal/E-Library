<!DOCTYPE HTML>
<?php
include_once("config.php");
$roll_no = $_POST['rollno'];

$query = "select first_name,last_name,enrollment_no,roll_no,branch,semester from student_record";
$result = mysql_query($query);
$row = mysql_fetch_array($result);


$query1 = "select issued_books.issue_code,
title,author,fine_detail.fine
from student_record
join issued_books on
issued_books.user_id = student_record.user_id
join fine_detail on
fine_detail.issue_code = issued_books.issue_code
join books on
books.book_id_no = issued_books.book_id_no
where roll_no = " . $roll_no . " and issued_books.fine='Y'";
$result1 = mysql_query($query1);
?>
<html>
	<head>
		<title> E-LIBRARY |DUE_CLEARANCE </title>
		<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3" style="border:1px solid black">
				</div>
				<div class="span9 well" style="border:1px solid black;font-size: 16px">
					<div class="row-fluid">
						<div class="span12" style="background-color: #808080">
							<h2><strong>CONFIRM DUE CLEARANCE</strong></h2>
						</div>
					</div>
					</br>
					<form action="due_clearance!.php" method="POST">
						<div class="row-fluid">
							<div class="span4">
								<b>username : </b> <?php echo $row['first_name'] . " " . $row['last_name'] ?>
							</div>
							<div class="span4">
								<b>roll_no. : </b> <?php echo $row['roll_no'] ?>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<b>enrollment_no.: </b> <?php echo $row['enrollment_no'] ?>
							</div>
							<div class="span4">
								<b>branch : </b> <?php echo $row['branch'] ?>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<b>semester : </b> <?php echo $row['semester'] ?>
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

						</div>
					</form>
				</div>
			</div>
		</div>
		</div>

		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3" style="border:1px solid black">
				</div>
				<div class="span9" style="border:1px solid black">
					<table class="table table-striped">
						<caption><i class="icon-tags"></i> Matched Result</caption>
						<thead style="background: peru">
							<tr>
								<th>#</th>
								<th>Issue Code</th>
								<th>Title</th>
								<th>Author</th>
								<th>Fine</th>


								<th>Action</th>
							</tr>
						</thead>
						<tbody>

							<?php $counter = 0;
							while ($row = mysql_fetch_array($result1)) {
								$counter++;

								echo "<tr>
                                <td>" . $counter . "</td>




                                <td>" . $row['issue_code'] . "</td>
                                <td>" . $row['title'] . "</td>
                                <td>" . $row['author'] . "</td>
                                <td>" . $row['fine'] . "</td>

                                <td>


                                <button class='btn btn-info' type='button'>pay
                                </button></td>
                            </tr>";
							}?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>