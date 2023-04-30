<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tourism Management System - Booking Confirmation</title>
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
	<section id="confirmation">
		<h2>Booking Confirmation</h2>
		<?php
			if(isset($_POST['package']) && isset($_POST['date']) && isset($_POST['persons'])) {
				$package = $_POST['package'];
				$date = $_POST['date'];
				$persons = $_POST['persons'];
				echo "<p>You have successfully booked Package: $package, Departure Date: $date, Number of Persons: $persons.</p>";

				// Save the booking details in a text file
				$file = fopen("bookings.txt", "a");
				if ($file) {
					fwrite($file, "$package,$date,$persons\n");
					fclose($file);
					echo "<p>The booking details have been saved.</p>";
				} else {
					echo "<p>There was an error saving the booking details.</p>";
				}
			} else {
				echo "<p>Booking details not found.</p>";
			}
		?>
	</section>
</main>

<footer>
	<p>&copy; 2023 Book My Trip. All rights reserved.</p>
</footer>
</body>
</html>
