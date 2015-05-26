<?php

	$firstname   = strip_tags($_POST['FNAME']);
	$lastname   = strip_tags($_POST['LNAME']);
	$name 		= $firstname . " " . $lastname;
	$company 	= strip_tags($_POST['COMPANY']);
	$email 		= htmlentities($_POST['EMAIL']);
	$position 	= strip_tags($_POST['POSITION']);
	$request	= $_POST['REQUEST'];
	$comments	= strip_tags($_POST['COMMENTS']);

	$parameters = array(
	    'apikey' => '8b6e84ca369e468542dedf60b372d6d3-us8',
	    'id' => 'a88264c9c3',
	    'email' => array(
	    	'email' => $email
	    ),
	    'double_optin' => false,
	    'send_welcome' => false,
	    'merge_vars' => array(
	    	'FNAME' => $firstname,
	    	'LNAME' => $lastname,
	    	'EMAIL' => $email,
	    	'COMPANY' => $company,
	    	'REQUEST' => $request,
	    	'COMMENTS' => $comments,
	    	'POSITION' => $position
	    )
	);

	$curl = curl_init("https://us8.api.mailchimp.com/2.0/lists/subscribe");
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parameters));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($curl);
	
?>
