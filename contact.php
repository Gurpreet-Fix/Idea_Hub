<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="veiwport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Contact</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome..in.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style8.css">
</head>
<body>
<div class="open">
		<div class="layer"></div>
		<div class="layer"></div>
	</div>
<div class="header">
<h2 class="logo">Your Logo</h2>
<ul>
				<li>
					<a href="onlineportal.php">Home</a>
				</li>
				<li>
					<a href="E:\Study\Gurpreet Singh 1905\MY PROJECT\Review.html">Reviews</a>
				</li>
				<li>
					<a href="picflip.php">Our Team</a>
				</li>
				<li>
					<a href="3dflip.php">Experience</a>
				</li>
				<li>
					<a href="#"  class="active">Contact us</a>
				</li>
				<li>
					<form action="includes/logout.inc.php" method="POST">
					<button type="submit" name="submit">Sign Out</button>
					</form>
				</li>
			</ul>
</div>
	<div class="box">
		<h2 style="border-bottom:solid 2px #03a9f4; padding-bottom:5px;">Contact Us</h2>
		<form action="includes/contact.inc.php" method="POST">
			<div class="inputbox">
				<input type="text" name="name" required="">
				<label>Name</label>
			</div>
			<div class="inputbox">
				<input type="text" name="mail" required="">
				<label>Email</label>
			</div>
			<div class="inputbox">
				<input type="text" name="subject" required="">
				<label>Subject</label>
			</div>
			<div class="inputbox">
				<input type="text" name="message" required="">
				<label>Message</label>
			</div>
			<button type="submit" name="submit">SEND MESSAGE</button>
		</form>
	</div>
</body>
</html>