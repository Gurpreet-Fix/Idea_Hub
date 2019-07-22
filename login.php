<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<div class="box">
		<h2 style="border-bottom:solid 2px #03a9f4; padding-bottom:5px;">Sign In</h2>
		<form action="includes/login.inc.php" method="POST">
			<div class="inputbox">
				<input type="text" name="uid" required="">
				<label>Username/E-mail</label>
			</div>
			<div class="inputbox">
				<input type="password" name="pwd" required="">
				<label>Password</label>
			</div>
			<button type="submit" name="submit">Sign In</button>
		</form>
	</div>

</body>
</html>