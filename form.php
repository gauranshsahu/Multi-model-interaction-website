<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$gender = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'gauranshr44@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n". 
                "Gender: $gender\n". 
                "User Message: $message\n";

$to = 'gauranshsahu5@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>