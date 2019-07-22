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
					<a href="picflip.php">Our Team</a>
				</li>
				<li>
					<a href="3dflip.php">Experience</a>
				</li>
				<li>
					<a href="https://docs.google.com/forms/d/e/1FAIpQLSddpxhHVEyiIdyEhNhR431nW8F8P8JMach52Bn4fsvMp9dp8Q/viewform">Contact us</a>
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
		which helps our CESS team to know about what is good for our students and society.<br>Click on the below button and submit your reviews.</p>
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSci2kmy0KGOd-WKsG_w4v3RWncC0Ah52iVh3mqpTTo34b4xKw/viewform">Click Here</a>
		</div>
	</section>
</body>
</html>