<!DOCTYPE HTML>
<?php
include_once("config.php");
?>
<html>
	<head>
		<title> E-LIBRARY |ADMIN </title>
		<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/highlight.css" type="text/css" rel="stylesheet">
		<script src="/public_html/jquery/jquery.js"></script>
		<script src="/public_html/js/bootstrap-collapse.js"></script>
		<script language="JavaScript" type="text/javascript">
			function changeFrame(page) {
				document.getElementById('top-content-box').src = page + ".php";
			}
		</script>
		<script src="/public_html/js/bootstrap-modal.js"></script>
	</head>
	<body style="background-color: #ffffcc;">
		<?php
		include_once('header.php');
		?>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3" style="border:1px solid black">
					<div class="row-fluid">
						<div class="span12 text-center" style="background-color: blue">
							<h4 style="color: #ffffff">Work Space</h4>
						</div>
						<hr>
						<div class="accordion highlight" id="accordion2">
							<div class="accordion-group ">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="" data-parent="#accordion2"
									   href="#" id="search_book" onClick="changeFrame(this.id)">
										Search Books &nbsp
										<i class="icon-chevron-right"></i>
									</a>
								</div>
								<!--								<div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">-->
								<!--									<div class="accordion-inner">-->
								<!--										Search Books-->
								<!--									</div>-->
								<!--								</div>-->
							</div>

							<div class="accordion-group ">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="" data-parent="#accordion2"
									   href="#" id="return-book" onClick="changeFrame(this.id)">
										Return Books &nbsp
										<i class="icon-chevron-right"></i>
									</a>
								</div>
								<!--								<div id="collapseTwo" class="accordion-body collapse">-->
								<!--									<div class="accordion-inner">-->
								<!--										Return Books-->
								<!--									</div>-->
								<!--								</div>-->
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="" data-parent="#accordion2"
									   href="#" id="due_clearance" onClick="changeFrame(this.id)">
										Due Clearance
										<i class="icon-chevron-right"></i>
									</a>
								</div>
								<!--								<div id="collapseThree" class="accordion-body collapse">-->
								<!--									<div class="accordion-inner">-->
								<!--										Due Clearance&nbsp-->
								<!--									</div>-->
								<!--								</div>-->
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="" data-parent="#accordion2"
									   href="#" id="add_books" onClick="changeFrame(this.id)">
										Add Books &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<i class="icon-chevron-right"></i>
									</a>
								</div>
								<!--								<div id="collapseFour" class="accordion-body collapse">-->
								<!--									<div class="accordion-inner">-->
								<!--										Add Books-->
								<!--									</div>-->
								<!--								</div>-->
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="" data-parent="#accordion2"
									   href="#" id="add_category" onClick="changeFrame(this.id)">
										Add Categories
										<i class="icon-chevron-right"></i>
									</a>
								</div>
								<!--								<div id="collapseFive" class="accordion-body collapse">-->
								<!--									<div class="accordion-inner">-->
								<!--										Add Categories-->
								<!--									</div>-->
								<!--								</div>-->
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
									   href="#collapseSix">
										Add Users &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<i class="icon-chevron-down"></i>
									</a>
								</div>
								<div id="collapseSix" class="accordion-body collapse">
									<div class="accordion-inner">
										<a href="#" id="student_record" onClick="changeFrame(this.id)">Student</a><br>
										<a href="#" id="teacher_record" onClick="changeFrame(this.id)">Teacher</a><br>
										<a href="#" id="admin_record" onClick="changeFrame(this.id)">Admin</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="span9">
					<div class="row-fluid">
						<div class="span12">
							<iframe src="/resources/search_book.php" frameborder="0" height="600px"
							        width="1000px" seamless id="top-content-box"
							        name="content-box" scrolling="no" sandbox="allow-forms allow-scripts">

								<!--								<p>Your browser does not support iframes.</p>-->
							</iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>