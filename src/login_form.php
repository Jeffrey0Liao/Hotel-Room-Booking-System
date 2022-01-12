<?php
	setcookie("Username", $_POST["Username"], time()+1800);
?>
<!DOCTYPE html>
	<head>
		<title>Log in</title>
	</head>
	<body>
		<?php
			try {
				$conn = new PDO("mysql:host=localhost;dbname=scycl2", "scycl2", "scycl2");
				$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "connection succeeded!\n";

				$a = $_POST["Username"];
				$b = $_POST["Password"];

				if ($a=="admin" && $b=="admin123456"){
					setcookie("Username", 'admin', time()+1800);
					header("Location: administrator.php");
					exit(0);
				}
		
				$sql = $conn->prepare("SELECT * FROM userinfo WHERE username='$a';");
				$sql->execute();
				$rows = $sql->fetch(PDO::FETCH_ASSOC);

                if ($rows['password'] == $b) 
				{
					header("Location: service.php");    
				} 
				else if (empty($rows['username'])){
                    header("Location: prompt.php");
                } else {
                    header("Location: login.php?exception=1");
                }

				$conn = NULL;
			} catch (PDOException $e) {
				echo "ERROR!\n";
				echo $conn->error;
			}
		?>
	</body>
</html>	
