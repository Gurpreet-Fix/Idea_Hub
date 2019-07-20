<?php
	if(isset($_SESSION['u_uid']));

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="veiwport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Main Page</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome..in.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style6.css">
	</head>
<body>
	<div class="open">
		<div class="layer"></div>
		<div class="layer"></div>
	</div>
	<section>
		<div class="header">
			<h2 class="logo">Your Logo</h2>
			<ul>
				<li>
					<a href="#" class="active">Home</a>
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
					<a href="contact.php">Contact us</a>
				</li>
				<li>
				<form action="includes/logout.inc.php" method="POST">
					<button type="submit" name="submit">Sign Out</button>
					</form>
				</li>
			</ul>
			</div>
		<div class="banner">
		<h2>Think Creative</h2><br>
		<h3>Get the best for the for our department</h3>
		<p>This website is for wellness and development of our depatrment.Here everyone can share their reviews and ideas 
		which helps our CESS team to know about what is good for our students and society</p>
		</div>
		<img src="cess.jpg" class="cess">
	</section>
</body>
</html>