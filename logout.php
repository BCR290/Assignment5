<?php
	session_start();
	if(isset($_SESSION["user"])) {
		session_destroy();
		header("Location: http://web.engr.oregonstate.edu/~smithcr/assignment5/login.php");
	}
	header("Location: http://web.engr.oregonstate.edu/~smithcr/assignment5/login.php");
?>