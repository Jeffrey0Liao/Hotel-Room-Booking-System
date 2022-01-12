<html>
	<head>
		<title>Log in</title>
	</head>
	<body>
		<?php
			try {
				$conn = new PDO("mysql:host=localhost;dbname=test", "root", "");
				$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "connection succeeded!\n";

                $sql = "SELECT * FORM ...;";
                $rows = $conn -> query($sql);
                if ($rows['Username'] == $_POST["Username"] &&
                    $rows['Password'] == $_POST["Password"]) {
                        
                } else if (...){
                    echo "User does not exist.\n"

                } else {
                    echo "Wrong username or password."
                }

				$conn = NULL;
			} catch (PDOException $e) {
				echo "connection failed!";
			}
		?>
	</body>
</html>	