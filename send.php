<?php

// Here we get all the information from the fields sent over by the form.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['company_name'];
$message = $_POST['subject'];
$message = $_POST['message'];

	$to = 'manjit.singh@kleward.com';
	$subject = 'WANDA STUDIOS - Response.';
	$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
	$headers = 'From: WANDA STUDIOS' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
	echo "<p style='font-size:20px; color:#009999'>Thank You</p><p style='color:#fff;'>Thank you for your interest in Wanda Studios Qingdao. A representative will be in touch with you shortly.</br></br><p>"; // success message
}else{
	echo "Please provide a correct email.";

}

?>