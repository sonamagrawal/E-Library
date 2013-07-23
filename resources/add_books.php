<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="/public_html/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<form action="book!.php" method="post" class="well form-horizontal">
			<fieldset>
				<legend>NEW BOOK</legend>
				<div class="control-group">
					<label class="control-label">TITLE</label>

					<div class="controls">
						<input type="text" required class="input-xlarge" name="title" placeholder="title">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">AUTHOR</label>

					<div class="controls">

						<input type="text" required class="input-xlarge" name="author" placeholder="author">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">COMPANY</label>

					<div class="controls">

						<input type="text" required class="input-xlarge" name="company" placeholder="company">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">PUBLISHED YEAR</label>

					<div class="controls">
						<input type="text" required class="input-small" name="year" placeholder="year">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">NO. OF COPIES</label>

					<div class="controls">
						<input required type="text" class="input-small" name="copies" placeholder="copies">
					</div>
				</div>


				<div class="control-group">
					<label class="control-label">CATEGORY</label>

					<div class="controls">
						<input required type="text" class="input-small" name="category" placeholder="category">
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary" name="submit">ADD</button>
					<button type="reset" class="btn btn-primary" name="reset">RESET</button>
				</div>
			</fieldset>
		</form>
	</body>
</html>