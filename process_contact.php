<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $message = $_POST["message"];

    $to = "your_email@example.com"; 

    $subject = "New Contact Form Submission from $first_name $last_name";

    $message_body = "First Name: $first_name\n";
    $message_body .= "Last Name: $last_name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Mobile Number: $mobile_number\n";
    $message_body .= "Message:\n$message";

    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>
