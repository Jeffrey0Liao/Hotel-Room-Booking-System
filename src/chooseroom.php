<?php

	if (empty($_COOKIE["Username"])) {
		echo "<script>window.location.href='relogin.php'</script>";
	}

	session_start();
?>
<html>
	<head>
		<title>Choose a room</title>
		<style type="text/css">
			* { 
				text-align: center;
				font-family: Arial;
				color: #FFFFFF;
			} 

			.input1 {
				height: 40px;
				width: 200px;
				border-radius: 20px;
				border: 1px solid #FFFFFF; /* Green */
				color: #FFFFFF;
				font-size: 25px;
				font-color: #FFFFFF;
				background: transparent;
				align: right;
			}

			.bt1 {
				height: 60px;
				width: 60px;
				border-radius: 30px;
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

			.bt2 {
				height: 30px;
				width: 100px;
				border-radius: 15px;
				border: 1px solid #FFFFFF; /* Green */
				color: #FFFFFF;
				font-size: 12px;
				background: transparent;
				position: right;
			}

			.bt2:hover {
				color: #4D4D4D;
				background: #FFFFFF;
				text-decoration: none;
			}
		</style>
	<head>
	<body style = "background:#4D4D4D;">
		<?php
			try {
				$conn = new PDO("mysql:host=localhost;dbname=scycl2", "scycl2", "scycl2");
				$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$a = $_COOKIE["Username"];
				$b = $_SESSION["b"];
				$c = $_SESSION["c"];
				$d = $_SESSION["d"];
				$floor = $_GET["floor"];

			} catch (PDOException $e) {
				echo "ERROR!\n";
			}
		?>

		<h1>Choose a Room...</h1>
		<p>
			<table border = "1" width = "100%" cellspacing="0" style="color:#CCCCCC;">
				<caption><h2>Floor <?php echo $floor; ?></h2></caption>
				<tr height = "140">					
					<td>
						<?php 
							echo "Large double bed<br>Room ".$floor."01<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."01' id='".$floor."01' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."01' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Large double bed"){
								echo "<script>
										document.getElementById('".$floor."01').disabled = false;
										document.getElementById('".$floor."01').value = 'Book now';
									  </script>";
							}
						?>
					</td>
					<td>
						<?php 
							echo "Large double bed<br>Room ".$floor."02<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."02' id='".$floor."02' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."02' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Large double bed"){
								echo "<script>
										document.getElementById('".$floor."02').disabled = false;
										document.getElementById('".$floor."02').value = 'Book now';
									  </script>";
							}
						?>
					</td>
					<td>
						<?php 
							echo "Large single bed<br>Room ".$floor."03<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."03' id='".$floor."03' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."03' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Large single bed"){
								echo "<script>
										document.getElementById('".$floor."03').disabled = false;
										document.getElementById('".$floor."03').value = 'Book now';
									  </script>";
							}
						?>
					</td>
					<td>
						<?php 
							echo "Large single bed<br>Room ".$floor."04<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."04' id='".$floor."04' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."04' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Large single bed"){
								echo "<script>
										document.getElementById('".$floor."04').disabled = false;
										document.getElementById('".$floor."04').value = 'Book now';
									  </script>";
							}
						?>
					</td>
					<td>
						<?php 
							echo "Small single room<br>Room ".$floor."05<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."05' id='".$floor."05' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."05' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Small single room"){
								echo "<script>
										document.getElementById('".$floor."05').disabled = false;
										document.getElementById('".$floor."05').value = 'Book now';
									  </script>";
							}
						?>
					</td>	
				</tr>
				<tr>					
					<td style="border-right-style:none; border-top-style:none; border-top-style:none">&nbsp</td>
					<td style="border-left-style:none; border-right-style:none; border-top-style:none; border-bottom-style:none">&nbsp</td>
					<td style="border-left-style:none; border-right-style:none; border-top-style:none; border-bottom-style:none">&nbsp</td>
					<td style="border-left-style:none; border-right-style:none; border-top-style:none; border-bottom-style:none">&nbsp</td>
					<td style="border-left-style:none; border-top-style:none; border-top-style:none">&nbsp</td>	
				</tr>
				<tr height = "140">					
					<td rowspan = "2">
						<?php 
							echo "VIP room<br>Room ".$floor."13<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."13' id='".$floor."13' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."13' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="VIP room"){
								echo "<script>
										document.getElementById('".$floor."13').disabled = false;
										document.getElementById('".$floor."13').value = 'Book now';
									  </script>";
							}
						?>
					</td>
					<td style="border-right-style:none; border-top-style:none; border-bottom-style:none">&nbsp</td>
					<td style="border-left-style:none; border-right-style:none; border-top-style:none; border-bottom-style:none"><h2>Stairs<h2></td>
					<td style="border-left-style:none; border-top-style:none; border-bottom-style:none">&nbsp</td>
					<td>
						<?php 
							echo "Small single room<br>Room ".$floor."06<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."06' id='".$floor."06' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."06' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Small single room"){
								echo "<script>
										document.getElementById('".$floor."06').disabled = false;
										document.getElementById('".$floor."06').value = 'Book now';
									  </script>";
							}
						?>
					</td>	
				</tr>
				<tr height = "140">
					<td style="border-right-style:none; border-top-style:none; border-bottom-style:none">&nbsp</td>
					<td style="border-left-style:none; border-right-style:none; border-top-style:none; border-bottom-style:none"><h2>Lobby<h2></td>
					<td style="border-left-style:none; border-top-style:none; border-bottom-style:none">&nbsp</td>
					<td>
						<?php 
							echo "Small single room<br>Room ".$floor."07<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."07' id='".$floor."07' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."07' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Small single room"){
								echo "<script>
										document.getElementById('".$floor."07').disabled = false;
										document.getElementById('".$floor."07').value = 'Book now';
									  </script>";
							}
						?>
					</td>	
				</tr>
				<tr>					
					<td style="border-right-style:none; border-top-style:none; border-top-style:none">&nbsp</td>
					<td style="border-left-style:none; border-right-style:none; border-top-style:none; border-bottom-style:none">&nbsp</td>
					<td style="border-left-style:none; border-right-style:none; border-top-style:none; border-bottom-style:none">&nbsp</td>
					<td style="border-left-style:none; border-right-style:none; border-top-style:none; border-bottom-style:none">&nbsp</td>
					<td style="border-left-style:none; border-top-style:none; border-top-style:none">&nbsp</td>		
				</tr>
				<tr height = "140">					
					<td>
						<?php 
							echo "Large double bed<br>Room ".$floor."12<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."12' id='".$floor."12' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."12' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Large double bed"){
								echo "<script>
										document.getElementById('".$floor."12').disabled = false;
										document.getElementById('".$floor."12').value = 'Book now';
									  </script>";
							}
						?>
					</td>
					<td>
						<?php 
							echo "Large double bed<br>Room ".$floor."11<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."11' id='".$floor."11' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."11' AND (checkin<='$c' AND checkout>='$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Large double bed"){
								echo "<script>
										document.getElementById('".$floor."11').disabled = false;
										document.getElementById('".$floor."11').value = 'Book now';
									  </script>";
							}
						?>
					</td>
					<td>
						<?php 
							echo "Large single bed<br>Room ".$floor."10<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."10' id='".$floor."10' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."10' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Large single bed"){
								echo "<script>
										document.getElementById('".$floor."10').disabled = false;
										document.getElementById('".$floor."10').value = 'Book now';
									  </script>";
							}
						?>
					</td>
					<td>
						<?php 
							echo "Large single bed<br>Room ".$floor."09<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."09' id='".$floor."09' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."09' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Large single bed"){
								echo "<script>
										document.getElementById('".$floor."09').disabled = false;
										document.getElementById('".$floor."09').value = 'Book now';
									  </script>";
							}
						?>
					</td>
					<td>
						<?php 
							echo "Small single room<br>Room ".$floor."08<br><br>" ;
							echo "<input type = 'button' value = 'Unavailable' disabled = 'True' onclick=window.location.href='bookhandler.php?f=".$floor."08' id='".$floor."08' class='bt2'>";							
						?>
						<?php
							$sql = $conn->prepare("SELECT * FROM bookstatus WHERE roomnum='".$floor."08' AND (checkin<'$c' AND checkout>'$b');");
							$sql->execute();
							$rows = $sql->fetch(PDO::FETCH_ASSOC);

							if (empty($rows) && $d=="Small single room"){
								echo "<script>
										document.getElementById('".$floor."08').disabled = false;
										document.getElementById('".$floor."08').value = 'Book now';
									  </script>";
							}
						?>
					</td>	
				</tr>
			</table>
			
			<br><br><br><br><h3>Select floor here:</h3>
			<input type="button" value="1" onclick="window.location.href='chooseroom.php?floor=1'" class="bt1">&nbsp
			<input type="button" value="2" onclick="window.location.href='chooseroom.php?floor=2'" class="bt1">&nbsp
			<input type="button" value="3" onclick="window.location.href='chooseroom.php?floor=3'" class="bt1">&nbsp
			<input type="button" value="4" onclick="window.location.href='chooseroom.php?floor=4'" class="bt1">&nbsp
			<input type="button" value="5" onclick="window.location.href='chooseroom.php?floor=5'" class="bt1">&nbsp
			<input type="button" value="6" onclick="window.location.href='chooseroom.php?floor=6'" class="bt1">&nbsp
			<input type="button" value="7" onclick="window.location.href='chooseroom.php?floor=7'" class="bt1">&nbsp
			<input type="button" value="8" onclick="window.location.href='chooseroom.php?floor=8'" class="bt1">&nbsp
			<input type="button" value="9" onclick="window.location.href='chooseroom.php?floor=9'" class="bt1">&nbsp
			<input type="button" value="10" onclick="window.location.href='chooseroom.php?floor=10'" class="bt1">&nbsp
			<input type="button" value="Back" onclick="window.location.href='bookspec.php?exception=0'" class="bt1" style="width:120px">&nbsp
		</p>
	</body>
</html>
