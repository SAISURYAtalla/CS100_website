<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tourism Management System - Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
	<div class="header">
		<h1>Tourism Management System : BOOK MY TRIP</h1>
	</div>
	
	<div class="navbar">
		<a href="index.html">Home</a>
		<a href="gallery.php">Gallery</a>
		<a href="destinations.php">Destinations</a>
		<a href="packages.php">Packages</a>
		<a href="rentals.php">Rentals</a>
		<a class="active" href="contact.php">Contact Us</a>
	</div>

	<main>
		<section id="contact">
			<h2>Contact Us</h2>
			<p>We'd love to hear from you! You can reach out to us through the following channels:</p>
			<ul>
				<li><a href="https://www.facebook.com/bookmytrip">Facebook</a></li>
				<li><a href="https://www.instagram.com/bookmytrip">Instagram</a></li>
				<li><a href="https://twitter.com/bookmytrip">Twitter</a></li>
			</ul>
			<p>Give any feedback/query if you want:</p>
			<form method="post" action="submit_form.php">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>

				<label for="message">Message:</label>
				<textarea id="message" name="message" rows="5" required></textarea>

				<button type="submit">Send</button>
			</form>
		</section>

		<section id="reviews">
			<h2>Top Reviews</h2>
			<ul>
				<li>"Book My Trip made planning my vacation a breeze! I loved the customized travel packages and the expert recommendations on top destinations."</li>
				<li>"The user-friendly interface made booking my rental so easy. I especially appreciated the 24/7 customer support for any inquiries."</li>
				<li>"Thanks to Book My Trip, I had the vacation of a lifetime. I highly recommend this platform to anyone looking to plan their next adventure!"</li>
			</ul>
		</section>

		<section id="about">
			<h2>About Us</h2>
			<p>We are a team of experienced travel professionals dedicated to making your vacation dreams a reality. Our platform offers customizable travel packages, expert recommendations on top destinations, and user-friendly booking tools. Let us help you plan your next adventure!</p>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 Book My Trip. All rights reserved.</p>
	</footer>
</body>
</html>
