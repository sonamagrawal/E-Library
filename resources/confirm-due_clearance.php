<!DOCTYPE HTML>
<?php
include_once("config.php");
$roll_no = $_POST['rollno'];

$query = "select user_id,first_name,last_name,enrollment_no,roll_no,branch,semester from student_record
		  join login on student_record.roll_no = login.user_name where roll_no = '" . $roll_no . "'";

$result = mysql_query($query);
if (mysql_num_rows($result) == 0) {
	header("location:due_clearance.php?m=0");
}
$row = mysql_fetch_array($result);
$user_id = $row['user_id'];

$query1 = "select issued_books.issue_code,title,author,fine_detail.fine from issued_books join
		   fine_detail on fine_detail.issue_code = issued_books.issue_code join books on
		   books.book_id_no = issued_books.book_id_no where issued_books.user_id = " . $user_id . " and
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
					<input type="hidden" name="userID" value='<?php echo $GLOBALS['user_id'] ?>'>

					<div class="row-fluid">
						<div class="span2">
							<button type="submit" id="comfirm" class="btn btn-large btn-success"
							        name="confirm"><i class="icon-ok"></i> Confirm
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
	</body>
</html>