<html>
	<head>
		<meta http-equiv="refresh" content="5; url = homepage.php">
	</head>
	<body>
		<?php
			try {
				$conn = new PDO("mysql:host=localhost;dbname=scycl2", "scycl2", "scycl2");
				$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "connection succeeded!\n";
				
				$a = $_POST["Username"];
				$b = $_POST["Password"];
				$c = $_POST["Realname"];
				$d = $_POST["Passport"];
				$f = $_POST["Telephone"];
				$g = $_POST["Email"];

				$stmt2 = $conn->prepare("SELECT * FROM userinfo WHERE username=:h;");
				$stmt2->bindParam(':h', $a);
				$stmt2->execute();
				$rows = $stmt2->fetch(PDO::FETCH_ASSOC);
				if (!empty($rows)) {
					echo "<script>window.location.href='registration.php?exception=5';</script>";
				}

				$stmt = $conn->prepare("INSERT INTO userinfo VALUES (:a, :b, :c, :d, :f, :g)");
				$stmt->bindParam(':a', $a);
				$stmt->bindParam(':b', $b);
				$stmt->bindParam(':c', $c);
				$stmt->bindParam(':d', $d);
				$stmt->bindParam(':f', $f);
				$stmt->bindParam(':g', $g);

				if (strlen($a)<4 || strlen($a)>18 || $a=='admin') {
					echo "<script>window.location.href='registration.php?exception=1';</script>";
				}
				if (strlen($b)<8) {
					echo "<script>window.location.href='registration.php?exception=2';</script>";
				}
				$preg_phone='/^1[34578]\d{9}$/ims';
				if (!preg_match($preg_phone, $f)) {
					echo "<script>window.location.href='registration.php?exception=3';</script>";
				}
				if (!filter_var($g, FILTER_VALIDATE_EMAIL)) {
					echo "<script>window.location.href='registration.php?exception=4';</script>";
				}


				$stmt->execute();
				echo "Online registration completed.\n";
				echo "Automatically jump in 5 seconds.\n";

				$conn = NULL;
			} catch (PDOException $e) {
				echo "connection failed!\n";
			}
		?>
	</body>
</html>	
