<?php
if(isset($_POST["email"]) && isset($_POST["text"])){


	$to = $_POST["email"];

	$subject = 'Assurance Email';

	$headers = "From: admin@sopromer.com\r\n";
	$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message=html_entity_decode( htmlentities($_POST["text"]) );
	$r=mail($to, $subject, $message, $headers);
	echo json_encode(array(
		"status"=>$r,
		"to"=>$to,
	));
}
else{
	echo "ERROR SENDING";
}