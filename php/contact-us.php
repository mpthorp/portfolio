<?php

	// Email details
	$email_to = "hello@etaskr.com";
	$email_subject = "Get in touch";

	$name   	= strip_tags($_POST['NAME']);
	$email 		= htmlentities($_POST['EMAIL']);
	$message	= strip_tags($_POST['MESSAGE']);

	$parameters = array(
	    'apikey' => '8b6e84ca369e468542dedf60b372d6d3-us8',
	    'id' => 'a918421962',
	    'email' => array(
	    	'email' => $email
	    ),
	    'double_optin' => false,
	    'send_welcome' => false,
	    'merge_vars' => array(
	    	'NAME' => $name,
	    	'EMAIL' => $email,
	    )
	);

	$curl = curl_init("https://us8.api.mailchimp.com/2.0/lists/subscribe");
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parameters));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($curl);

	// ----------------------------------

		// Build message 
		$email_message .= "Name: ".$name."\n";
		$email_message .= "Email: ".$email."\n";
		$email_message .= "Message: ".$message."\n";		

	// -----------------------------------------

	// Set headers
	$headers = 'From: '.$email."\r\n".
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	// Send mail
	@mail($email_to, $email_subject, $email_message, $headers);  

?>