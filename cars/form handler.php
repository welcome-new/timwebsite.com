<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['messsage'];

$email_from ='info@yourwebsite.com';

$email_subject ='New Form Submission';

$email_body ="User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User subject: $subject.\n".
               "User Message: $message.\n";

$to= 'muuotimmy@gmail.com'

$headers = "From: $email_from \r\n";

$headers. ="Reply-to: $visitor_email \r\r";


mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");


?>
