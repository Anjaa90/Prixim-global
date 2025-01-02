

<?php
if (isset($_POST['email'])) {
    $email_to = "sales@priximglobal.com, javed@priximglobal.com";
    $email_subject = "PriximGlobal Contact Form";

    // Function to show errors and stop script execution
    function died($error) {
        echo "<p>We are very sorry, but there were error(s) found with the form you submitted:</p>";
        echo "<ul>" . $error . "</ul>";
        echo "<p>Please go back and correct these errors before resubmitting the form.</p>";
        die();
    }

    // Validate if required fields exist (remove 'subject' validation)
    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['phone_number']) || !isset($_POST['message'])) {
        $error_message = "<li>There appears to be a problem with the form submission. Please make sure all required fields are filled out.</li>";
        died($error_message);
    }

    // Sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $message = htmlspecialchars($_POST['message']);
    $ip = $_SERVER['REMOTE_ADDR']; // Get the user's IP address

    // Clean strings to avoid injection
    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    // Prepare the email message (remove 'subject' field from message)
    $email_message = "Form details below.\n\n";
    $email_message .= "Sender's IP: " . clean_string($ip) . "\n";
    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Phone: " . clean_string($phone_number) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // Email headers
    $headers = 'From: noreply@priximglobal.com' . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion() . "\r\n" .
               'Content-Type: text/plain; charset=UTF-8';

    // Send the email
    if (@mail($email_to, $email_subject, $email_message, $headers)) {
        // If mail sent successfully
        ?>
        <script language="javascript" type="text/javascript">
            alert('Thank you for the message. We will contact you shortly.');
            window.location = 'index.html'; // Redirect to the homepage after success
        </script>
        <?php
    } else {
        // If mail sending fails
        ?>
        <script language="javascript" type="text/javascript">
            alert('Message failed. Please, send an email to support@priximglobal.com.');
            window.location = history.back(); // Redirect to previous page
        </script>
        <?php
    }
}
?>
