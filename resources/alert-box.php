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
			if ($_GET['m'] == '0')
				echo '<div class="alert alert-info">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>LOGIN! </strong> Please Login First.
					  </div>';
			elseif ($_GET['m'] == '2')
				echo '<div class="alert alert-info">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>You Havent Issued Any Book</strong>
					  </div>';
			elseif ($_GET['m'] == '3')
				echo '<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <strong>BINGO!</strong> No Fine Due At Present
					  </div>';
		?>
	</body>
</html>