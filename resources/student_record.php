<html lang="en">
	<head>
		<link href="/public_html/css/bootstrap.css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
		<script src="/public_html/jquery/jquery.js"></script>
		<script src="/public_html/js/bootstrap-alert.js"></script>
	</head>
	<body>
		<?php
		if(isset($_GET['m']))
		if($_GET['m']=='1')
		echo '<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Successfull!</strong> Student added succesfuly.
		</div>';
			?>
		<div class="container-fluid">
			<div class="span9 " style="border:1px solid black">
				<div class="row-fluid">
					<div class="span12" style="background-color: #808080">
						<h2><strong>STUDENT REGISTRATION</strong></h2>
					</div>
				</div>
				<br>

				<div class="row-fluid">
					<div class="span12">
						<form action="student_record!.php" method="post" class=" form-horizontal">
							<fieldset>
								<div class="control-group">
									<label class="control-label">ROLL NO.</label>

									<div class="controls">
										<input type="text" required class="span3" name="rollno">
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
									<label class="control-label">ENROLLMENT NO.</label>

									<div class="controls">
										<input type="text" required class="span3" name="enrollmentno">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">BRANCH</label>

									<div class="controls">
										<select required class="span3" name="branch">
											<option>Architecture</option>
											<option>Bio Medical</option>
											<option>Bio Technology</option>
											<option>Chemical Engineering</option>
											<option>Civil Engineering</option>
											<option>Computer Science</option>
											<option>Electrical Engineering</option>
											<option>Electronics And Telecommunicaton</option>
											<option>Information Technology</option>
											<option>Mechanical Engineering</option>
											<option>Metallurgical Engineering</option>
											<option>Mining Engineering</option>
											<option>MCA</option>
										</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">SEMESTER</label>

									<div class="controls">
										<select required class="span3" name="semester">
											<?php
											for ($i = 1; $i <= 10; $i++) {
												echo "<option>$i </option>";
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn btn-success btn-large"
									        name="submit"><i class="icon-plus-sign"></i>ADD
									</button>
									<button type="reset" class="btn btn-inverse btn-large" name="reset"><i
											class="icon-refresh"></i>RESET
									</button>
									<button type="button" class="btn btn-large btn-warning" name="cancel"
									        onclick="javascript:history.go(-1)">
										<i class="icon-remove"></i>CANCEL
									</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>