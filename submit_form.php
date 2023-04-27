<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'youremail@example.com';
    $subject = 'New contact form submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo '<p>Thank you for contacting us!</p>';
    } else {
        echo '<p>There was an error sending your message. Please try again later.</p>';
    }
}
?>
