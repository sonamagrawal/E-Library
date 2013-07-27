<!DOCTYPE HTML>
<?php
include_once("config.php");

$query = "select distinct roll_no from student_record ";
$result = mysql_query($query);

$id = '';
while ($row = mysql_fetch_array($result)) {
	$id .= '"' . $row['roll_no'] . '",';
}
$id_list = '[' . rtrim($id, ",") . ']';
?>
<html>
	<head>
		<title> E-LIBRARY |DUE-CLEARANCE </title>
		<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
		<script src="/public_html/jquery/jquery.js"></script>
		<script src="/public_html/js/bootstrap-alert.js"></script>
	</head>
	<body>
		<?php
		if (isset($_GET['m']))
			if ($_GET['m'] == '1')
				echo '<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Successfull!</strong> Due Cleared succesfuly.
				</div>';
			elseif ($_GET['m'] == '0')
				echo '<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>ERROR!</strong> Please Enter Correct Roll Number.
				</div>';
		?>
		<div class="container-fluid">
			<div class="span9 well" style="border:1px solid black">
				<div class="row-fluid">
					<div class="span12" style="background-color: #808080">
						<h2><strong>DUE CLEARANCE</strong></h2>
					</div>
				</div>
				</br>
				<div class="row-fluid">
					<div class="span12">
						<form class="form-inline" action="confirm-due_clearance.php" method="POST">
							<input type="text" required class="span3" name="rollno"
							       placeholder="Enter Roll Number"
							       autocomplete="off"
							       data-provide="typeahead"
							       data-items="6"
							       min-length="1"
							       data-source='<?php echo $id_list ?>'>
							<button type="submit" class="btn btn-success">&nbspGO !&nbsp
							</button>
						</form>
					</div>
				</div>
				</br></br></br></br></br></br>
			</div>
		</div>
	</body>
	<script src="/public_html/jquery/jquery.js"></script>
	<script src="/public_html/js/bootstrap-typeahead.js"></script>
</html>
