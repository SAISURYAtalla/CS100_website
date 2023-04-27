<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tourism Management System - Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		<a href="#">Contact Us</a>
	</div>
	<div class="main">
		<h2>Contact Us</h2>
		<form action="submit_form.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required><br>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required><br>

			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea><br>

			<input type="submit" value="Submit">
		</form>
</div>
	<footer>
		<p>&copy; 2023 Tourism Management System</p>
	</footer>
</body>
</html>
