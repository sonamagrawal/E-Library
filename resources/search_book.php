<!DOCTYPE HTML>
<?php
include_once("config.php");
?>
<html>
	<head>
		<title> E-LIBRARY |SEARCH BOOK </title>
		<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<?php
		$query = "select DISTINCT title,author from books";
		$result = mysql_query($query);

		$find_category = "select DISTINCT name from category";
		$categories = mysql_query($find_category);

		$title = '';
		$author = '';
		$category = '';
		while ($row = mysql_fetch_array($result)) {
			$title .= '"' . $row['title'] . '",';
			$author .= '"' . $row['author'] . '",';
		}
		while ($row1 = mysql_fetch_array($categories)) {
			$category .= '"' . $row1['name'] . '",';
		}
		$title_list = '[' . rtrim($title, ",") . ']';
		$author_list = '[' . rtrim($author, ",") . ']';
		$category_list = '[' . rtrim($category, ",") . ']';
		?>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12" style="background-color: #808080">
					<h2><strong>SEARCH BOOK</strong></h2>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12 well">
					<form class="form-horizontal" action="books.php" method="POST">
						<div class="control-group">
							<label class="control-label ">TITLE </label>

							<div class="controls">
								<input class="span8" type="text" name="title"
								       PLACEHOLDER="Select Title"
								       data-provide="typeahead" autocomplete="off"
								       data-items="6"
								       min-length="1"
								       data-source='<?php echo $title_list ?>'>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">AUTHOR </label>

							<div class="controls">
								<input class="span8"
								       type="text"
								       name="author"
								       PLACEHOLDER="Select Author"
								       data-provide="typeahead"
								       autocomplete="off"
								       data-items="6"
								       min-length="1"
								       data-source='<?php echo $author_list ?>'>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">CATEGORY </label>

							<div class="controls">
								<input class="span8" type="text" name="category"
								       PLACEHOLDER="Select Category"
								       data-provide="typeahead"
								       autocomplete="off"
								       data-items="6"
								       min-length="1"
								       data-source='<?php echo $category_list ?>'>
							</div>
						</div>
						<div class="form-actions">
							<button id="dddd" type="SUBMIT" class="btn btn-large btn-success"
							        data-loading-text="Searching.."
							        name="submit">
								<i class="icon-search"></i> Search
							</button>
							<button type="RESET" class="btn btn-large btn-primary" name="reset">
								<i class="icon-refresh"></i> Reset
							</button>
						</div>
					</form>
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