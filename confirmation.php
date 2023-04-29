<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tourism Management System - Confirmation</title>
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
			<p>Thank you for booking with us! Here are your booking details:</p>
			<ul>
				<li>Package: <?php echo $_POST["package"]; ?></li>
				<li>Departure Date: <?php echo $_POST["date"]; ?></li>
				<li>Number of Persons: <?php echo $_POST["persons"]; ?></li>
			</ul>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 Book My Trip. All rights reserved.</p>
	</footer>

</body>
</html>
