<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tourism Management System - Booking</title>
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
	<a href="contact.php">Contact Us</a>
</div>

<main>
	<section id="booking">
		<h2>Booking Details</h2>
		<form method="post" action="confirmation.php">
			<label for="package">Select Package:</label>
			<select id="package" name="package">
				<option value="Package 1">Package 1</option>
				<option value="Package 2">Package 2</option>
				<option value="Package 3">Package 3</option>
			</select><br><br>
			
			<label for="date">Departure Date:</label>
			<input type="date" id="date" name="date" required><br><br>
			
			<label for="persons">Number of Persons:</label>
			<input type="number" id="persons" name="persons" required><br><br>
			
			<button type="submit">Confirm Booking</button>
		</form>
	</section>
</main>

<footer>
	<p>&copy; 2023 Book My Trip. All rights reserved.</p>
</footer>
</body>
</html>