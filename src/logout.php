<?php
	if (empty($_COOKIE["Username"])) {
		echo "<script>window.location.href='relogin.php'</script>";
    }
    
  setcookie("Username", $_POST["Username"], time()-1800);
  header("location:homepage.php");
?>
