<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and capture form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone_number = htmlspecialchars(trim($_POST['phone_number']));
    $skype = htmlspecialchars(trim($_POST['skype']));
    $country = htmlspecialchars(trim($_POST['country']));
    $serviceCategory = htmlspecialchars(trim($_POST['serviceCategory']));
    $specificService = htmlspecialchars(trim($_POST['specificService']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Prepare the email
    $to = "sales@priximglobal.com";
    $subject = "New Inquiry from " . $name;
    $body = "You have received a new inquiry from your contact form. \n\n" .
            "Details:\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone Number: $phone_number\n" .
            "Skype ID: $skype\n" .
            "Country: $country\n" .
            "Service Category: $serviceCategory\n" .
            "Specific Service: $specificService\n" .
            "Message: $message\n";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to the Thank You page
        header("Location: thank_you.php");
        exit();
    } else {
        echo "There was an error sending your message. Please try again.";
    }
}
?>
