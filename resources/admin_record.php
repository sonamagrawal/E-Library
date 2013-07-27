<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="/public_html/css/bootstrap.css" rel="stylesheet">
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
			<strong>Successfull!</strong> Admin added succesfuly.
		</div>';
		?>
		<div class="container-fluid">
			<div class="span9 well" style="border:1px solid black">
				<div class="row-fluid">
					<div class="span12" style="background-color: #808080">
						<h2><strong>CREATE NEW ADMIN</strong></h2>
					</div>
				</div>
				<br>

				<div class="row-fluid">
					<div class="span12">
						<form action="admin_record!.php" method="post" class=" form-horizontal">
							<fieldset>
								<div class="control-group">
									<label class="control-label">EMPLOYEE NO.</label>

									<div class="controls">
										<input type="text" required class="span3" name="employeeno"
										       placeholder="NITRR Employee Code">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">FIRST NAME:</label>

									<div class="controls">
										<input type="text" required class="span3" name="firstname"
										       placeholder="Ex: Rahul">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">LAST NAME:</label>

									<div class="controls">
										<input type="text" required class="span3" name="lastname"
										       placeholder="Ex: Gupta">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">DEPARTMENT</label>

									<div class="controls">
										<select required class="span3" name="department">
											<option>Library</option>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">DESIGNATION</label>

									<div class="controls">
										<input type="text" required class="span3" name="designation"
										       placeholder="Ex: HOD">
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn btn-success" name="submit">ADD</button>
									<button type="reset" class="btn btn-success" name="reset">RESET</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>