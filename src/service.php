<?php
	if (empty($_COOKIE["Username"])) {
		echo "<script>window.location.href='relogin.php'</script>";
	}
?>
<html>
	<head>
		<title>Services</title>
		<style type="text/css">
			* { 
				text-align: center;
			} 

			.bt1 {
				height: 100px;
				width: 100px;
				border-radius: 50px;
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
				<br><br>
				<h2>Welcome <?php echo $_COOKIE["Username"];?></h2>
				<p>Choose the service you want:</p>
				<br>
				<p>
					<button onclick="window.location.href='bookspec.php?exception=0'" class="bt1">Room booking</button><br><br><br>
					<button onclick="window.location.href='currentbook.php'" class="bt1">View current booking</button><br><br><br>
					<button onclick="window.location.href='logout.php'" class="bt1">Log<br>out</a><br><br><br>
				</p>
			</div>
		</div>
	</body>
</html>