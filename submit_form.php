<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'tallasaisurya@gmail.com';
    $subject = 'New contact form submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    echo '<p>Thank you for contacting us!</p>';
}
?>
