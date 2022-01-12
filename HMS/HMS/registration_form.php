<html>
	<head>
		<meta http-equiv="refresh" content="5; url = HomePage.html">
	</head>
	<body>
		<p><h3>Submission completed<h3></p>
		<p>Automatically jump in 5 seconds.</p>
		<?php
			try {
				$conn = new PDO("mysql:host=localhost;dbname=test", "root", "");
				$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "connection succeeded!\n";
				echo "Online registration completed!\n";
				echo "Username:" . $_POST["name"];

				$sql = "INSERT INTO...VALUES (...)"
				if ($conn -> query($sql) === TRUE) {
					echo "New record added!\n"
				} else {
					echo "Error:" . $sql . "<br>" . $conn -> error;
				}

				$conn = NULL;
			} catch (PDOException $e) {
				echo "connection failed!";
			}
		?>
	</body>
</html>	