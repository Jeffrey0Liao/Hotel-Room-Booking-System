<?php
	if (empty($_COOKIE["Username"]) || $_COOKIE["Username"]!=='admin') {
		echo "<script>window.location.href='relogin.php'</script>";
	}
?>

<html>
    <head>
        <title>$Admin_page</title>
    </head>
    <body>
        <p><h2>This is the Adminstration Page of Sunny Isle</h2></p>
        <p><h2>Welcome, adminstrator.</h2></p>
        <p>Choose the service you prefer:</p>
        <input type="button" value="View all reservations" onclick="window.location.href='adminbook.php'">
        <input type="button" value="Log out" onclick="window.location.href='homepage.php'">
    </body>
</html>