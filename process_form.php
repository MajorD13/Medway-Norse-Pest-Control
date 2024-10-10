<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $streetAddress = htmlspecialchars($_POST['streetAddress']);
    $pestService = htmlspecialchars($_POST['pestService']);
    $comments = htmlspecialchars($_POST['comments']);

    $to = 'tim.discipline@ncsgrp.co.uk, tdiscipline@gmail.com';
    $subject = 'New Contact Form Submission';
    $message = "Full Name: $fullName\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Email Address: $email\n";
    $message .= "Street Address: $streetAddress\n";
    $message .= "Pest Service Required: $pestService\n";
    $message .= "Additional Comments: $comments\n";
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'There was a problem sending the message.';
    }
} else {
    echo 'Invalid request.';
}
?>
