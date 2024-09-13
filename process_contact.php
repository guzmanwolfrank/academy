<?php
// Replace with your email settings
$to = "info@futuresclasses.com";
$subject = "Contact Form Submission";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "Your message has been sent successfully!";
  } else {
    echo "An error occurred while sending your message.";
  }
}
?>