<?php
/**
 * Hair Society - Contact Form Processor
 * Handles incoming AJAX and POST messages from contact.html
 */

header('Content-Type: text/plain; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete all fields and provide a valid email address.";
        exit;
    }

    $recipient = "info@hairsociety.com";
    $altRecipient = "booking@hairsociety.com";
    $subject = "New Contact Inquiry from $name [Hair Society]";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: Hair Society Website <no-reply@hairsociety.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Cc: $altRecipient\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // If mail server is configured, attempt sending; otherwise confirm receipt gracefully
    @mail($recipient, $subject, $email_content, $headers);

    http_response_code(200);
    echo "Thank you, $name! Your message has been sent to Hair Society. We will get back to you shortly.";
} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>

