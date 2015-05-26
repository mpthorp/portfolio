<?php

	$email 		= htmlentities($_POST['EMAIL']);

	$parameters = array(
	    'apikey' => '8b6e84ca369e468542dedf60b372d6d3-us8',
	    'id' => '0183c2f2de',
	    'email' => array(
	    	'email' => $email
	    ),
	    'double_optin' => false,
	    'send_welcome' => false,
	    'merge_vars' => array(
	    	'EMAIL' => $email
	    )
	);

	$curl = curl_init("https://us8.api.mailchimp.com/2.0/lists/subscribe");
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parameters));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($curl);

?>