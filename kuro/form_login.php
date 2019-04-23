<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Site</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/query.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style>
		a {color : #7e83d3;}
		h3 {color: #00e6e6;}
		div {color: #7075d8;}
		span {color: #000000;}
  </style>
</head>
<body style="background-color: black;">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1 text-center">
      <br>

			<h2>Login Administrator<h2>
				<div class="col-sm-6 col-sm-offset-3 text-center" style="background-color: #7e83d3; height: 3px">
	      </div><br><br>
			<form method="POST" action="form_login_proses.php">
				<div style=>
					<center>Username :</center><input type="text" name="username" placeholder="Username.." class="masuk"> <br /><br /><br />
					<center>Password :</center><input type="password" name="pass" placeholder="Password.." class="masuk"> <br /><br /><br />
				<div>
					<center>
						<input type="submit" name="submit" value="login" class="tombol">
					</center>
				</div>
					<?php
						if ($_GET)
						{
							echo '<div class="text-alert">';
							echo $_GET['message'];
							echo '</div>';
						}
					?>
				</div>
			</form>
    </div>
  </div>
</body>
</html>
