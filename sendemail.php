<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'<br><p style="font-size:1.8em; padding:0.5em 0; color:#07baba">Thank You</p><p style="color:#fff;  font-size:14px; line-height:19px; margin:0 0 10px;">Thank you for your interest in Wanda Studios Qingdao. A representative will be in touch with you as soon as possible.</br></br><p>'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $company = @trim(stripslashes($_POST['company'])); 
	$subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 
   
    $email_from = $email;
    $email_to = 'info@wandastudios.com';//replace with your email
	
	$body =  '<p>Hi there</p>';
	$body .= '<p>Enquiry submitted from wandastudios.com. Please find enquiry details below:</p>';	
    $body .= '<b>Name: </b>' . $name . "<p></p>"  
			. '<b>Email: </b>' . $email . "<p></p>" 
			. '<b>Subject: </b>' . $subject . "<p></p>" 
			. '<b>Message: </b>' . $message. "<p></p>" 
			. '<b>Company: </b>' . $company."<p></p>";
			
	$body .= "<p>Regards- </br>"
			."Wandastudios.com</p>";
			

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	
	// Additional headers
	$headers .= 'To: WSQ <info@wandastudios.com>' . "\r\n";
	$headers .= 'From: '.$name.' <'.$email.'>' . "\r\n";
	//$headers .= 'BCc: birthdayarchive@example.com' . "\r\n";
	$headers .= 'Cc:  '.$name.' <'.$email.'>' . "\r\n";
	
   
	// Mail it
	mail($email_to, $subject, $body, $headers);

    echo json_encode($status);
    die;