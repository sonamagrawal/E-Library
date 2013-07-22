<!DOCTYPE HTML>
<?php
include_once("config.php");
$roll_no = $_POST['rollno'];

$query = "select first_name,last_name,enrollment_no,roll_no,branch,semester from student_record 
		  where roll_no = '" . $roll_no . "'";

$result = mysql_query($query);
if (mysql_num_rows($result) == 0) {
	header("location:javascript://:history.go(-1)");
}
$row = mysql_fetch_array($result);

$query1 = "select issued_books.issue_code,title,author,fine_detail.fine from student_record
		   join issued_books on issued_books.user_id = student_record.user_id join fine_detail
		   on fine_detail.issue_code = issued_books.issue_code join books on
		   books.book_id_no = issued_books.book_id_no where roll_no = '" . $roll_no . "' and 
		   issued_books.fine='Y' and fine_detail.paid = 'N' ";
$result1 = mysql_query($query1);
?>
<html>
	<head>
		<title> E-LIBRARY |CONFIRM CLEARANCE </title>
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
						<div class="row-fluid">
							<div class="span4">
								<b>Username : </b> <?php echo $row['first_name'] . " " . $row['last_name'] ?>
							</div>
							<div class="span4">
								<b>Roll No. : </b> <?php echo $row['roll_no'] ?>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<b>Enrollment No. : </b> <?php echo $row['enrollment_no'] ?>
							</div>
							<div class="span4">
								<b>Branch : </b> <?php echo $row['branch'] ?>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<b>Semester : </b> <?php echo $row['semester'] ?>
							</div>
						</div>
						<hr>
						<div class="row-fluid">
							<div class="span12">
								<table class="table table-striped">
									<thead style="background: peru">
										<tr>
											<th>#</th>
											<th>Issue Code</th>
											<th>Title</th>
											<th>Author</th>
											<th>Fine</th>
										</tr>
									</thead>
									<tbody>
										<?php $counter = 0;
										while ($row1 = mysql_fetch_array($result1)) {
											$counter++;
											echo "<tr>
					                                <td>" . $counter . "</td>
					                                <td>" . $row1['issue_code'] . "</td>
					                                <td>" . $row1['title'] . "</td>
					                                <td>" . $row1['author'] . "</td>
					                                <td>" . $row1['fine'] . "</td>
					                            </tr>";
										}?>
									</tbody>
								</table>
							</div>
						</div>
						<hr>
					<form action="clearance!.php" method="POST">
						<input type="hidden" name="roll_no" value='<?php echo $roll_no ?>'>
						<div class="row-fluid">
							<div class="span2">
								<button type="submit" id="comfirm" class="btn btn-large btn-success"
								        name="confirm"><i class="icon-ok"></i> Pay&nbsp&nbsp&nbsp
								</button>
							</div>
							<div class="span2">
								<button type="button" class="btn btn-large btn-warning" name="cancel"
								        onclick="javascript:history.go(-1)">
									<i class="icon-remove"></i> Cancel
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>