<?php
if(isset($_POST['submit'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sales@priximglobal.com";
    $email_subject = "Prixim Global Newsletter";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['newsletter']) ) 
    
         {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
    $email = $_POST['newsletter']; // required
    $ip = $_SERVER['REMOTE_ADDR']; 
 

 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
    $email_message .= "Senders IP: ".clean_string($ip)."\n\n"; 
    $email_message .= "Newsletter: ".clean_string($email)."\n";

// create email headers
$headers = 'From: noreply@priximglobal.com'."\r\n";
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

if (@mail($email_to, $email_subject, $email_message, $headers))
      {
         ?>
        <script language="javascript" type="text/javascript">
            alert('Thank you for the message. We will contact you shortly.');
            window.location = history.back();
        </script>
    <?php
    }
    else { ?>
        <script language="javascript" type="text/javascript">
            alert('Message failed. Please, send an email to support@priximglobal.com');
            window.location = history.back();
        </script>
    <?php
    }
   }
?>