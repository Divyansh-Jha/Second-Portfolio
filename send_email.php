<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Validate form data (you can add more validation if required)
  if (!empty($name) && !empty($email) && !empty($message)) {
    // Set up email parameters
    $to = "djhadjha188@gmail.com"; // Replace with your personal email address
    $subject = "New message from your website";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
      // Email sent successfully
      echo "Thank you for your message! We will get back to you soon.";
    } else {
      // Failed to send email
      echo "Oops! An error occurred while sending your message. Please try again later.";
    }
  } else {
    // Invalid form data
    echo "Please fill in all the required fields.";
  }
} else {
  // Invalid request method
  echo "Invalid request method.";
}
?>
