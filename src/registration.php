<html>
	<head>
		<title>Online Registration</title>
		<style type="text/css">
			* { 
				text-align: center;
			} 

			.input1 {
				height: 30px;
				width: 200px;
				border-radius: 15px;
				border: 1px solid #FFFFFF; /* Green */
				color: #FFFFFF;
				font-size: 20px;
				font-color: #FFFFFF;
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
		<?php
			$exception = $_GET["exception"];
			if ($exception=='5') {
				echo "<script>alert('User already exist.');</script>";
			} else if ($exception=='1') {
				echo "<script>alert('Please enter a valid username.\\n\\nA valid username should contain at least 4 characters and at most 18 characters.');</script>";
			} else if ($exception=='2') {
				echo "<script>alert('Please enter a valid password.\\n\\nA valid password should contain at least 8 characters.');</script>";
			} else if ($exception=='3') {
				echo "<script>alert('Please enter a valid telephone number.\\n\\nA valid telephone number should only contain numbers.');</script>";
			} else if ($exception=='4') {
				echo "<script>alert('Please enter a valid e-mail address.\\n\\nA valid telephone number should contain an \'@\'.');</script>";
			}
		?>
		<div id="main" style="color:#FFFFFF;width:1400px;height:900px">
			<div id="left" style="width:1020px;float:left;">
				<img src="SI.jpg">
			</div>
			<div id="right" style="background:#4D4D4D;width:380px;float:right;height:623px">
				<br><br><br><br>
				<h2 style="font-family:Arial">Be a Member of Sunny Isle...</h2><br>

				<form action = "registration_form.php" method = "POST">
					<p>	
						<input type = "text" name = "Username" placeholder = "Username" class = "input1"><br><br>
						<input type = "password" name = "Password" placeholder = "password" class = "input1"><br><br>
						<input type = "text" name = "Realname" placeholder = "Real Name" class = "input1"><br><br>
						<input type = "text" name = "Passport" placeholder = "Passport" class = "input1"><br><br>
						<input type = "text" name = "Telephone" placeholder = "Telephone" class = "input1"><br><br>
						<input type = "text" name = "Email" placeholder = "E-mail" class = "input1"><br><br><br>
						<button type = "submit" class="bt1">Submit</button>&nbsp&nbsp&nbsp
						<button type = "Reset" value = "Reset!" class="bt1">Reset</button>&nbsp&nbsp&nbsp
						<input type = "button" value = "Back" onclick="window.location.href='homepage.php'" class = "bt1">
					</p>
				</form>	
				<br><br>
							
			</div>
		</div>
	</body>
</html>