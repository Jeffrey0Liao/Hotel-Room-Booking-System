<?php
	$exception = $_GET["exception"];
	if ($exception==1){
		echo "<script>alert('Wrong password.');</script>";
	}
?>
<html>
	<head>
		<title>Sunny Isle - Logging in</title>
		<style type="text/css">
			* { 
				text-align: center;
			} 

			.input1 {
				height: 40px;
				width: 200px;
				border-radius: 20px;
				border: 1px solid #FFFFFF; /* Green */
				color: #FFFFFF;
				font-size: 25px;
				background: transparent;
				align: right;
			}

			.bt1 {
				height: 70px;
				width: 70px;
				border-radius: 35px;
				border: 1px solid #FFFFFF; /* Green */
				color: #FFFFFF;
				font-size: 15px;
				background: transparent;
				position: right;
			}

			.bt1:hover {
				color: #4D4D4D;
				background: #FFFFFF;
				text-decoration: none;
			}
		</style>
	<head>
	<body>
	<div id="main" style="color:#FFFFFF;width:1400px;height:900px">
		<div id="left" style="width:1020px;float:left;">
			<img src="SI.jpg">
		</div>
		<div id="right" style="background:#4D4D4D;width:380px;float:right;height:623px">
			<br><br><br><br><br><br>
			<h2 style="font-family:Arial">Log in to Sunny Isle...</h2>
			<form action="login_form.php" method="POST">
				<p>	
					<br><br>
					<input type = "text" name = "Username" placeholder = "Username" class = "input1"><br><br>
					<input type = "password" name = "Password" align = "middle" placeholder = "Password" class = "input1"><br><br>
					<br><br>
					<input type = "Submit" value = "Log in" class = "bt1">&nbsp&nbsp&nbsp
					<input type = "Reset" value = "Reset" class = "bt1">&nbsp&nbsp&nbsp
					<input type = "button" value = "Back" onclick="window.location.href='homepage.php'" class = "bt1">
				</p>
			</form>
		</div>
	</div>
		
	</body>
</html>