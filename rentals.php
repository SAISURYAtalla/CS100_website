<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management System - Rentals</title>
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

    <div class="main">
        <section id="banner">
            <h2>Rentals</h2>
            <p>Select your vehicle and rental date:</p>
        </section>

        <section id="content">
            <form method="post" action="">
                <label for="vehicle">Select Vehicle:</label>
                <select name="vehicle" id="vehicle">
                    <option value="car">Car</option>
                    <option value="bike">Bike</option>
                    <option value="other">Other</option>
                </select>
                <br>
                <label for="date">Select Date:</label>
                <input type="date" id="date" name="date">
                <br>
                <input type="submit" name="submit" value="Submit">
            </form>

            <?php
                if(isset($_POST['submit'])){
                    $vehicle = $_POST['vehicle'];
                    $date = $_POST['date'];

                    echo "<p>You have selected a $vehicle for $date</p>";
                    echo "<p>Thank you for choosing Book My Trip!</p>";
                }
            ?>
        </section>
    </div>

    <section id="about">
        <h2>About Us</h2>
        <p>We are a team of experienced travel professionals dedicated to making your vacation dreams a reality. Our platform offers customizable travel packages, expert recommendations on top destinations, and user-friendly booking tools. Let us help you plan your next adventure!</p>
    </section>

    <footer>
        <p>&copy; 2023 Book My Trip. All rights reserved.</p>
    </footer>
</body>
</html>
