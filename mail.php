<?php  
if( isset($_POST['submit']) ) {
  $mailTo = 'saikirank3819@gmail.com';
//getting user data
$firstName = $_POST['firstName'];
//$lastName = $_POST['lastName'];
$fromEmail = $_POST['email'];
$subject1 = $_POST['msg'];
$subject2="confirmation: message was sumitted successfully";
//Recipient email, Replace with your email Address
//$mailTo = 'saikirank3819@gmail.com';
//email subject
$subject11 = ' A New Message Received From ' .$firstName;
//email message body
$htmlContent =  "Client Name:".$firstName ."\n"
."Email:".$fromEmail."\n\n"
."feedback:"."\n".$_POST['msg'];
//'<h2> Email Request Received </h2>
//<p> <b>Client Name: </b> '.$firstName .' </p>
//<p> <b>Email: </b> '.$fromEmail .'</p>
//<p> <b>feedback: </b> '.$subject1.'</p>';
$message="dear" .   $firstName."\n"
  ."thank you for submiting the feedback";
//header for sender info
$headers = "From: " .$firstName . "<". $fromEmail . ">";
$headers2 = "From: " .$firstName . "<". $mailTo . ">";
//$headers .= "MIME-Version: 1.0\r\n";
//$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
//PHP mailer function
 $result1 = mail($mailTo, $subject1, $htmlContent, $headers);
 $result2 = mail($fromEmail, $subject2, $message, $headers2);
   //error checking
  if($result1&&$result2) {
    $success = "The message was sent successfully!";
   } else {
    $failed = "Error: Message was not sent, Try again Later";
   }
}

?>