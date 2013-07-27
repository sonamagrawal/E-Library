<!DOCTYPE HTML>
<?php
include_once("config.php");
?>
<html>
	<head>
		<title> E-LIBRARY |DASHBOARD </title>
		<link href="/public_html/css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
		<link href="/public_html/css/highlight.css" type="text/css" rel="stylesheet">
		<script src="/public_html/jquery/jquery.js"></script>
		<script src="/public_html/js/bootstrap-collapse.js"></script>
		<script language="JavaScript" type="text/javascript">
			function changeFrame(page){
				document.getElementById('top-content-box').src = page + ".php";
			}
		</script>
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
							<h4 style="color: #ffffff">Dash Board</h4>
						</div>
						<hr>
						<div class="accordion highlight" id="accordion2">
							<div class="accordion-group">
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

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="" data-parent="#accordion2"
									   href="#" id="book-in-hand" onClick="changeFrame(this.id)">
										Books In Hand&nbsp
										<i class="icon-chevron-right"></i>
									</a>
								</div>
								<!--								<div id="collapseTwo" class="accordion-body collapse">-->
								<!--									<div class="accordion-inner">-->
								<!--										Books In Hand-->
								<!--									</div>-->
								<!--								</div>-->
							</div>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="" data-parent="#accordion2"
									   href="#" id="fine" onClick="changeFrame(this.id)">
										Fine Detail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
										<i class="icon-chevron-right"></i>
									</a>
								</div>
<!--								<div id="collapseThree" class="accordion-body collapse">-->
								<!--									<div class="accordion-inner">-->
								<!--										Fine Detail-->
								<!--									</div>-->
								<!--								</div>-->
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