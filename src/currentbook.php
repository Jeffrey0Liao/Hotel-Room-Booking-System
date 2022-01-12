<?php
	if (empty($_COOKIE["Username"])) {
		echo "<script>window.location.href='relogin.php'</script>";
	}
?>
<html>
    <head>
        <title>View current reservations</title>
        <style type = "text/css">
            * {
                text-align: center;
                color: #FFFFFF;
            }
            .d1 {
                width: 650px;
				border-radius: 30px;
				border: 1px solid #FFFFFF; /* Green */
				color: #FFFFFF;
				font-family: Arial;
				font-size: 16px;
				background: transparent;
                margin: auto;
			}

            .bt1 {
				height: 24px;
				width: 200px;
				border-radius: 12px;
				border: 1px solid #FFFFFF; /* Green */
				color: #FFFFFF;
				font-size: 15px;
				background: transparent;
				margin: auto;
			}

			.bt1:hover {
				color: #4D4D4D;
				background: #FFFFFF;
				text-decoration: none;
			}

            .bt2 {
				height: 60px;
				width: 60px;
				border-radius: 30px;
				border: 1px solid #FFFFFF; /* Green */
				color: #FFFFFF;
				font-size: 20px;
				background: transparent;
				margin: auto;
			}

			.bt2:hover {
				color: #4D4D4D;
				background: #FFFFFF;
				text-decoration: none;
			}
        </style>
    </head>
    <body style = "background:#4D4D4D;">
        <script>
           fucntion Cancel(x, y, z){
                window.location = "deletehandler.php?a="+x+"&b="+y+"&c="+z;
           }
        </script>

        <br><h1>View Your reservations Here</h1>
        <br><br>
        <div class = "d1">
            <?php
                $conn = new PDO("mysql:host=localhost;dbname=scycl2", "scycl2", "scycl2");
                $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $a = $_COOKIE["Username"];
                $sql = $conn->prepare("SELECT * FROM bookstatus WHERE username='$a';");
                $sql->execute();
                $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
                $max = count($rows);
                if (empty($rows)){
                    echo "You have no room booked.<br><br>";
                } else {
                    $sql = $conn->prepare("SELECT * FROM bookstatus WHERE username='$a';");
                    $sql->execute();
                    for ($count=0; $count<$max; $count++){
                        $rows = $sql->fetch(PDO::FETCH_ASSOC);

                        echo "<br>check in date:".$rows["checkin"]."     check out date:".$rows["checkout"]."     room number:".$rows["roomnum"];
                        echo "<br>";
                        echo "<input type = 'button' value = 'cancel reservation' onclick=window.location.href='deletehandler.php?a=".$rows["checkin"]."&b=".$rows["checkout"]."&c=".$rows["roomnum"]."' class='bt1'><br>";
                    }
                }
            ?>
            <br><br>
            <input type="button" value="Back" onclick="window.location.href='service.php'" class="bt2">
        </div>
    </body>
</html>
