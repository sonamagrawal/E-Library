<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<img src="/public_html/img/nitrrnew_03.png" width=100%>
		</div>
	</div>
</div>
<div class="container-fluid well">
	<div class="row-fluid">
		<div class="span12">
			<div class="span3">
				<a href="index.php"><img src="/public_html/img/e_library_logo.gif"
				                         alt="Welcome To E-LIBRARY" title="Home"></a>
			</div>
			<div class="span6">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#" style="font-size:30px;font-family: lucida consolas;">HOME</a></li>
					<li><a href="#" style="font-size:30px;font-family: lucida consolas;">TEAM</a></li>
					<li><a href="#" style="font-size:30px;font-family: lucida consolas;">CONTACT US</a></li>
				</ul>
			</div>
			<div class="span3">
				<i class="icon-user"></i>
				<?php session_start();
				if (isset($_SESSION['u_id']))
					echo '<a  href="profile.php" style="text-decoration: none;
					 font-size: 13px;text-align:center;">' . $_SESSION['name'] . '</a>
					<a  href="logout.php" style="text-decoration: none;
					 font-size: 13px;text-align:center;">Logout</a>';
				else
					echo '<a  href="#LoginModal" data-toggle="modal" style="text-decoration: none;
					 font-size: 19px;text-align:center;"> Login</a>';
				?>
			</div>
		</div>
	</div>
</div>
<div id="LoginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img
				src="/public_html/img/layout/close.png"></button>
		<h3 id="myModalLabel">LOGIN</h3>
	</div>
	<div class="modal-body">
		<div class="row-fluid">
			<div class="span12">
				<form action="login!.php" method="post" class=" form-horizontal">
					<fieldset>
						<div class="control-group">
							<label class="control-label">USER NAME:</label>

							<div class="controls">
								<input type="text" required class="span8" name="username"
								       placeholder="Roll No./Employee No.">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">PASSWORD:</label>

							<div class="controls">
								<input type="password" required class="span8" name="password">
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-large btn-success" name="submit"><i
									class="icon-user icon-white"></i> GO !
							</button>
							<button type="reset" class="btn btn-large btn-inverse" name="reset"><i
									class="icon-refresh icon-white"></i> RESET
							</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
