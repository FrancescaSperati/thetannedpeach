<?php
  if(!isset($_POST['submit']))
  {
  	echo "Error, please submit the form to proceed!";
  }

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $email_from = 'verde.com.au';
  $email_subject = "NEW FORM SUBMISSION";
  $email_body = "You have received a new message from the user $name. \n\n". "Message content: \n $message. \n\n"."From email: $visitor_email. \n\n".

  $to = "6590@ait.nsw.edu.au";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header('Location: thank-you.html');

?>
