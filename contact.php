<!DOCTYPE html>
<html>
<head>
	<title>Tourism Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Tourism Management System</h1>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="destinations.php">Destinations</a></li>
				<li><a href="packages.php">Packages</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Welcome to our tourism website!</h2>
		<br>
		<p><h3>Discover new and exciting destinations with us.</h3></p>
		<br><br>
		
		<form action="submit_form.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required><br><br>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required><br><br>

			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea><br><br>

			<input type="submit" value="Submit">
		</form>
	</main>
	<footer>
		<p>&copy; 2023 Tourism Management System</p>
	</footer>
</body>
</html>
