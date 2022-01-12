<?php
	if (empty($_COOKIE["Username"]) || $_COOKIE["Username"]!=='admin') {
		echo "<script>window.location.href='relogin.php'</script>";
	}
?>

<html>
    <head>
        <title>reservation Management</title>
    </head>
    <body>
        <?php
            $conn = new PDO("mysql:host=localhost;dbname=scycl2", "scycl2", "scycl2");
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connection succeeded!<br>";
            
            $sql = $conn->prepare("SELECT * FROM bookstatus;");
            $sql->execute();
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
            $max = count($rows);
            if (empty($rows)){
                echo "There is no current reservation.";
            } else {
                $sql = $conn->prepare("SELECT * FROM bookstatus;");
                $sql->execute();
                for ($count=0; $count<$max; $count++){
                    $rows = $sql->fetch(PDO::FETCH_ASSOC);

                    echo "username:".$rows["username"]." check in date:".$rows["checkin"]." check out date:".$rows["checkout"]." room type:".$rows["roomtype"]." roomnumber:".$rows["roomnum"];
                    echo "<br><br>";
                }
            }
        ?>
        </body>
</html>
