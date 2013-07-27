<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="/public_html/css/bootstrap.css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="span9 well" style="border:1px solid black">
				<div class="row-fluid">
					<div class="span12" style="background-color: #808080">
						<h2><strong>ADDING TEACHER RECORD</strong></h2>
					</div>
				</div>
				<br>

				<div class="row-fluid">
					<div class="span12">
						<form action="teacher_record!.php" method="post" class=" form-horizontal">
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