<?php
    if (empty($_COOKIE["Username"])) {
        echo "<script>window.location.href='relogin.php'</script>";
    }

    session_start();
?>
<html>
    <head>
        <title>booking confirmation</title>
    </head>
    <body>
        <?php
			try {
				$conn = new PDO("mysql:host=localhost;dbname=scycl2", "scycl2", "scycl2");
				$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "connection succeeded!\n";

				$a = $_COOKIE["Username"];
				$b = $_SESSION["b"];
				$c = $_SESSION["c"];
                $d = $_SESSION["d"];
                $f = $_GET["f"];
                
                $stmt = $conn->prepare("INSERT INTO bookstatus VALUES (:a, :b, :c, :d, :f)");
				$stmt->bindParam(':a', $a);
				$stmt->bindParam(':b', $b);
				$stmt->bindParam(':c', $c);
				$stmt->bindParam(':d', $d);
				$stmt->bindParam(':f', $f);
                $stmt->execute();
                
                session_destroy();
                echo "<script>
                        alert('Succeed!');
                        flag = confirm('Do you want to continue booking?');
                        if (flag){
                            window.location.href='bookspec.php';
                        } else {
                            window.location.href='service.php';
                        }
                    </script>";

			} catch (PDOException $e) {
				echo "ERROR!\n";
			}
		?>
    </body>
</html>
