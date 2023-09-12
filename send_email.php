<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Set the recipient email address
  $to = 'ishyshams@gmail.com';

  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the email subject and body
  $subject = 'Contact Form Submission';
  $body = "Name: $name\nEmail: $email\n\n$message";

  // Set the email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo 'success';
  } else {
    echo 'error';
  }
}
?>
