<?php
/**
 * Hair Society - Appointment Booking Form Processor
 * Handles incoming AJAX and POST appointment requests
 */

header('Content-Type: text/plain; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['app_name']) ? strip_tags(trim($_POST['app_name'])) : '';
    $email = isset($_POST['app_email']) ? filter_var(trim($_POST['app_email']), FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['app_phone']) ? strip_tags(trim($_POST['app_phone'])) : '';
    $free_time = isset($_POST['app_free_time']) ? strip_tags(trim($_POST['app_free_time'])) : '';
    $services = isset($_POST['app_services']) ? strip_tags(trim($_POST['app_services'])) : '';
    $barber = isset($_POST['app_barbers']) ? strip_tags(trim($_POST['app_barbers'])) : '';

    if (empty($name) || empty($phone) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please provide your name, phone number, and a valid email address.";
        exit;
    }

    $recipient = "booking@hairsociety.com";
    $altRecipient = "info@hairsociety.com";
    $subject = "New Appointment Request: $name [Hair Society]";

    $email_content = "Client Name: $name\n";
    $email_content .= "Client Email: $email\n";
    $email_content .= "Client Phone: $phone\n";
    $email_content .= "Preferred Time: $free_time\n";
    $email_content .= "Requested Service: $services\n";
    $email_content .= "Preferred Stylist/Barber: $barber\n";

    $headers = "From: Hair Society Appointments <no-reply@hairsociety.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Cc: $altRecipient\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    @mail($recipient, $subject, $email_content, $headers);

    http_response_code(200);
    echo "Thank you, $name! Your appointment request has been received. Our concierge will confirm your slot via $phone or $email shortly.";
} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>

