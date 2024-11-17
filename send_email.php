<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "tutorupva@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent!";
    } else {
        echo "Message delivery failed!";
    }
}
?>
