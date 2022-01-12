<html>
    <head>
        <title>booking confirm</title>
    </head>
    <body>
        <?php
			try {
				$conn = new PDO("mysql:host=localhost;dbname=scycl2", "scycl2", "scycl2");
				$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "connection succeeded!\n";

				$a = $_GET["a"];
				$b = $_GET["b"];
                $c = $_GET["c"];

                $stmt = $conn->prepare("DELETE FROM bookstatus WHERE checkin=:a AND checkout=:b AND roomnum=:c;");
				$stmt->bindParam(':a', $a);
				$stmt->bindParam(':b', $b);
				$stmt->bindParam(':c', $c);
                $stmt->execute();

                echo "<script>
                        alert('Succeed!');
                        window.location.href = 'currentbook.php';
                    </script>";

			} catch (PDOException $e) {
				echo "ERROR!\n" . $e->getMessage();
			}
		?>
    </body>
</html>
