<?php
	session_start();
	if(isset($_SESSION["user"])) {
		session_destroy();
		header("Location: http://web.engr.oregonstate.edu/~smithcr/assignment5/login.php");
	} else if (isset($_POST["userName"])) {
		$_SESSION["user"] = $_POST["userName"];
		$_SESSION["count"] = "0";
		header("Location: http://web.engr.oregonstate.edu/~smithcr/assignment5/content1.php");
	} else { 
		header("Location: http://web.engr.oregonstate.edu/~smithcr/assignment5/login.php");
	}
?>