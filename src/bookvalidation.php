<?php
    if ($_POST["ckind"]>=$_POST["ckoutd"] || empty($_POST["ckind"]) || empty($_POST["ckoutd"]) || date('Y-m-d', time())>=$_POST["ckind"]) {
        echo "<script>window.location.href='bookspec.php?exception=1';</script>";
    }

    session_start();
    $_SESSION["b"] = $_POST["ckind"];
    $_SESSION["c"] = $_POST["ckoutd"];
    $_SESSION["d"] = $_POST["optroom"];
?>

<html>
    <head>
        <title>Booking Specification</title>
    </head>
    <body>
        <script>window.location.href = "chooseroom.php?floor=1"</script>
    </body>

</html>