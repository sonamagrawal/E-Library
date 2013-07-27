<!DOCTYPE HTML>
<?php
include_once("config.php");
$query = "select DISTINCT title,author,category.name as name from books join category on books.category_id = category.category_id";
$result = mysql_query($query);
$title = '';
$author = '';
$category = '';
while ($row = mysql_fetch_array($result)) {
	$title .= '"' . $row['title'] . '",';
	$author .= '"' . $row['author'] . '",';
	$category .= '"' . $row['name'] . '",';
}
$title_list = '[' . rtrim($title, ",") . ']';
$author_list = '[' . rtrim($author, ",") . ']';
$category_list = '[' . rtrim($category, ",") . ']';
?>
<html lang="en">
<head>
	<title> E-LIBRARY |HOME </title>
	<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
	<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
	<link href="/public_html/css/home-style.css" type="text/css" rel="stylesheet">
</head>
<body style="background-color: #ffffcc">

<?php
include_once('header.html');
?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span9">
			<div class="span1">
			</div>
			<div class="span5 book-view-left" style="background-color: blue">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				<div class="row-fluid">
					<div class="span12 text-center" style=";color: #ffffff;">
						<h1><strong>Search</strong></h1>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12 text-center" style="color: #ffffff;">
						<h1><strong>Book</strong></h1>
					</div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
			<div class="span5 book-view-right" style="background-color: dimgrey">
				<br>
				<br>
				<br>
				<br>
				<br>

				<div class="row-fluid">
					<div class="span12">
						<form action="books.php" method="POST">
							<table class="table">
								<tbody>
									<tr>
										<td>
											<div class="control-group">
												<label class="control-label">TITLE </label>

												<div class="controls">
													<!--															TITLE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
													<input
														type="text" name="title"
														PLACEHOLDER="Select Title"
														data-provide="typeahead" autocomplete="off"
														data-items="6"
														min-length="1"
														data-source='<?php echo $title_list ?>'>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="control-group">
												<label class="control-label">AUTHOR </label>

												<div class="controls">
													<!--														AUTHOR &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
													<input
														type="text"
														name="author"
														PLACEHOLDER="Select Title"
														data-provide="typeahead"
														autocomplete="off"
														data-items="6"
														min-length="1"
														data-source='<?php echo $author_list ?>'>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="control-group">
												<label class="control-label">CATEGORY </label>

												<div class="controls">
													<!--														CATEGORY &nbsp -->
													<input type="text"
													       name="category"
													       PLACEHOLDER="Select Title"
													       data-provide="typeahead"
													       autocomplete="off"
													       data-items="6"
													       min-length="1"
													       data-source='<?php echo $category_list ?>'>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<br>
											<!--													<div class="form-actions">-->
											<button type="RESET" class="btn btn-large btn-primary"
											        name="reset">
												<i class="icon-refresh"></i>Reset
											</button>
											<button id="dddd" type="SUBMIT"
											        class="btn btn-large btn-success"
											        data-loading-text="Searching.."
											        name="submit">
												<i class="icon-search"></i>Search
											</button>
											<!--													</div>-->
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
				<br>
				<br>
			</div>
			<div class="span1">
			</div>
		</div>
		<div class="span3 well" style="background-color: cadetblue">
			<div class="row-fluid">
				<div class="span12 text-center" style="background-color: blue">
					<h4>Recent News</h4>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12 text-center" style="border: 1px dotted #000000">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				</div>
			</div>
			<br>
			<hr>
			<div class="row-fluid">
				<div class="span12 text-center" style="background-color: blue">
					<h4>Notice</h4>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12 text-center" style="border: 1px dotted #000000">
					<br>
					<br>
					<br>
					<br>
				</div>
			</div>
		</div>
	</div>
</div>
<br>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" style="border:1px solid black;">
			<div class="span6" style="background-color: graytext">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
			<div class="span6" style="background-color: graytext">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
		</div>
	</div>
</div>
</body>
<script src="/public_html/jquery/jquery.js"></script>
<script src="/public_html/js/bootstrap-typeahead.js"></script>
<script src="/public_html/js/bootstrap-button.js"></script>
<script>$('#dddd')
		.click(function () {
			var btn = $(this)
			btn.button('loading')
			setTimeout(function () {
				btn.button('reset')
			}, 2000)
		});</script>
</html>