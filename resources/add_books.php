<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="/public_html/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3" style="border:1px solid black">
            </div>

            <div class="span9 " style="border:1px solid black">
                <div class="row-fluid">
                    <div class="span12" style="background-color: #808080">
                        <h2><strong>ADD BOOKS</strong></h2>
                    </div>
                </div>
                <br>
                <div class="row-fluid">
                    <div class="span12">
		<form action="book!.php" method="post" class=" form-horizontal">
			<fieldset>

				<div class="control-group">
					<label class="control-label">TITLE</label>

					<div class="controls">
						<input type="text" required class="span3" name="title" placeholder="title">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">AUTHOR</label>

					<div class="controls">

						<input type="text" required class="span3" name="author" placeholder="author">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">COMPANY</label>

					<div class="controls">

						<input type="text" required class="span3" name="company" placeholder="company">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">PUBLISHED YEAR</label>

					<div class="controls">
						<input type="text" required class="span3" name="year" placeholder="year">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">NO. OF COPIES</label>

					<div class="controls">
						<input required type="text" class="span3" name="copies" placeholder="copies">
					</div>
				</div>


				<div class="control-group">
					<label class="control-label">CATEGORY</label>

					<div class="controls">
						<input required type="text" class="span3" name="category" placeholder="category">
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-success" name="submit">ADD</button>
					<button type="reset" class="btn btn-success" name="reset">RESET</button>
				</div>
			</fieldset>
		</form>
	</body>
</html>