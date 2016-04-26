<?php
// set some variables
$emailFrom = "meetraspa2014@gmail.com";
$emailTo = "q.fathemohamad@icloud.com";
$subject = "Message from website ";

// grab the data being passed from the method="post" in the HTML form
// and hold it in a variable
$fname     = Trim(stripslashes($_POST['fname']));
$lname     = Trim(stripslashes($_POST['lname'])); 
$email     = Trim(stripslashes($_POST['email'])); 
$phone     = Trim(stripslashes($_POST['phone'])); 
$message   = Trim(stripslashes($_POST['message']));



// prepare email body text
$body = "";
$body .= "Name: ";
$body .= $fname ." ". $lname;
$body .= "\n";
// prepare email body text
$body .= "email: ";
$body .= $email;
$body .= "\n";
// prepare email body text
$body .= "Phone: ";
$body.= $phone;
$body.= "\n";

$body .= "Message: ";
$body .= $message ;
$body .= "\n";

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");

// send the user to the thank you webpage
header("Location: contact-thanks.html");
?>