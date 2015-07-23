<?php
	session_start();
	if (!isset($_SESSION["user"])) {
		header("Location: http://web.engr.oregonstate.edu/~smithcr/assignment5/login.php");
	}
	$count = $_SESSION["count"]++;
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?=$count?></title>
	</head>
	
	<body>
		content 1
		count: <?=$count?>
		<p> user: <?=$_SESSION["user"]?></p>
		<a href="http://web.engr.oregonstate.edu/~smithcr/assignment5/content2.php">other</a>
		<a href="http://web.engr.oregonstate.edu/~smithcr/assignment5/logout.php">logout</a>
	</body>
</html>