<?php
	if (empty($_COOKIE["Username"])) {
		echo "<script>window.location.href='relogin.php'</script>";
	}
?>
<html>
	<head>
		<title>Booking Specification</title>
		<style type="text/css">
			* { 
				text-align: center;
			} 

			.d1 {
				height: 50px;
				width: 220px;
				border-radius: 30px;
				border: 1px solid #FFFFFF; /* Green */
				color: #FFFFFF;
				font-family: Arial;
				font-size: 20px;
				background: transparent;
				margin-left: 80px;
				
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
			if ($exception=='1') {
				echo "<script>alert('Please enter valid dates.');</script>";
			}
		?>
		<div id="main" style="color:#FFFFFF;width:1400px;height:900px">
			<div id="left" style="width:1020px;float:left;">
				<img src="SI.jpg">
			</div>
			<div id="right" style="background:#4D4D4D;width:380px;float:right;height:623px">
				<br><br>
				<h2 style="font-family:Arial;font-size:35px;">Booking details</h2>
				<form action = "bookvalidation.php" method = "POST">
					<p>
						<div class = "d1">Check-in-date:<input type = "date" name = "ckind" class = ""></div><br><br>
						<div class = "d1">Check-out-date:<input type = "date" name = "ckoutd"></div><br><br>
						<div class = "d1">
							Roomtype:&nbsp;<select name = "optroom" size = "1">
                            	<option>Small single room </option>
                            	<option>Large single bed </option>
                            	<option>Large double bed </option>
                            	<option>VIP room</option>
                        	</select>
						</div>
                    	<br><br><br>
						<input type = "Submit" value = "Confirm" class = "bt1">&nbsp&nbsp&nbsp
						<input type = "Reset" value = "Reset" class = "bt1">&nbsp&nbsp&nbsp
						<input type = "button" value = "Back" onclick="window.location.href='service.php'" class = "bt1">
					</p>
				</form>
			</div>
		</div>
	</body>
</html>