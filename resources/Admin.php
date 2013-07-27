<!DOCTYPE HTML>
<?php
include_once("config.php");
?>
<html>
	<head>
		<title> E-LIBRARY |ADMIN </title>
		<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
		<!--		<script src="/public_html/js/bootstrap-transition.js"></script>-->
		<script src="/public_html/jquery/jquery.js"></script>
		<script src="/public_html/js/bootstrap-collapse.js"></script>
	</head>
	<body>
		<?php
		include_once('header.html');
		?>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3" style="border:1px solid black">
					<div class="row-fluid">
						<div class="span12 text-center" style="background-color: blue">
							<h4 style="color: #ffffff">Work Space</h4>
						</div>
						<hr>
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
									   href="#collapseOne">
										Search Books
									</a>
								</div>
								<div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
									<div class="accordion-inner">
										Search Books
									</div>
								</div>
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
									   href="#collapseTwo">
										Return Books
									</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										Return Books
									</div>
								</div>
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
									   href="#collapseThree">
										Due Clearance
									</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										Due Clearance
									</div>
								</div>
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
									   href="#collapseFour">
										Add Books
									</a>
								</div>
								<div id="collapseFour" class="accordion-body collapse">
									<div class="accordion-inner">
										Add Books
									</div>
								</div>
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
									   href="#collapseFive">
										Add Categories
									</a>
								</div>
								<div id="collapseFive" class="accordion-body collapse">
									<div class="accordion-inner">
										Add Categories
									</div>
								</div>
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
									   href="#collapseSix">
										Add Users
									</a>
								</div>
								<div id="collapseSix" class="accordion-body collapse">
									<div class="accordion-inner">
										<a href="#">Student</a><br>
										<a href="#">Teacher</a><br>
										<a href="#">Admin</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="span9" style="border:1px solid black">
					<div class="row-fluid">
						<div class="span12">
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>