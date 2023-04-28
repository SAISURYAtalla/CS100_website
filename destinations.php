<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tourism Management System - Destinations</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Tourism Management System : BOOK MY TRIP</h1>
	</div>
	
	<div class="navbar">
		<a href="index.html">Home</a>
		<a href="gallery.php">Gallery</a>
		<a class="active" href="destinations.php">Destinations</a>
		<a href="packages.php">Packages</a>
		<a href="rentals.php">Rentals</a>
		<a href="contact.php">Contact Us</a>
	</div>
	
	<div class="main">
		<section id="banner">
			<h2>Our Destinations</h2>
			<p>Explore our top destinations and find your next adventure!</p>
		</section>
		
		<section id="content">
			<?php
				if(isset($_GET['destination'])) {
					$destination = $_GET['destination'];
					$display = $destination . '.php';
					if(file_exists($display)) {
						include($display);
					} else {
						echo '<h3>Sorry, no information available for this destination</h3>';
					}
				} else {
					echo '<p>Please select a destination from the list below to learn more:</p>';
					echo '<ul>';
					echo '<li><a href="?destination=hawaii">Hawaii, Beach Getaway</a></li>';
					echo '<li><a href="?destination=sydney">Sydney, Australia</a></li>';
					echo '<li><a href="?destination=paris">Paris, France</a></li>';
					echo '<li><a href="?destination=tokyo">Tokyo, Japan</a></li>';
					echo '<li><a href="?destination=bali">Bali, Thailand</a></li>';
					echo '<li><a href="?destination=swiss_alps">Swiss Alps, Mountain Adventure</a></li>';
					echo '</ul>';
				}
			?>
		</section>
		
		<section id="about">
			<h2>About Us</h2>
			<p>We are a team of experienced travel professionals dedicated to making your vacation dreams a reality. Our platform offers customizable travel packages, expert recommendations on top destinations, and user-friendly booking tools. Let us help you plan your next adventure!</p>
		</section>
	</div>
	
	<footer>
		<p>&copy; 2023 Book My Trip. All rights reserved.</p>
	</footer>
</body>
</html>
