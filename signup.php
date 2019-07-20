<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	</head>
	<body>
	<div class="box">
		<h2 style="border-bottom:solid 2px #03a9f4; padding-bottom:5px;">Sign Up</h2>
		<form action="includes/signup.inc.php" method="POST">
			<div class="inputbox">
				<input type="text" name="first" required="">
				<label>First Name</label>
			</div>
			<div class="inputbox">
				<input type="text" name="last" required="">
				<label>Last Name</label>
			</div>
			<div class="inputbox">
				<input type="text" name="email" required="">
				<label>E-mail</label>
			</div>
			<div class="inputbox">
				<input type="text" name="uid" required="">
				<label>Username</label>
			</div>
			<div class="inputbox">
				<input type="password" name="pwd" required="">
				<label>Password</label>
			</div>
			<button type="submit" name="submit">Sign Up</button>
		</form>
	</div>
</body>
</html>