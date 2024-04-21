<?php
if (isset($_POST["name"])) {
	// Read the form values
	$success = false;
	$name = isset($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) : "";
	$senderEmail = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : "";
	$message = isset($_POST['message']) ? filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) : "";

	// Validate input
	if (empty($name) || empty($senderEmail) || empty($message)) {
		echo '<div class="failed">Failed: Please fill in all required fields.</div>';
		exit;
	}

	// Validate email format
	if (!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
		echo '<div class="failed">Failed: Invalid email format.</div>';
		exit;
	}

	// Headers
	$to = "hello@digimaple.ca";
	$subject = 'Contact Us';
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: $senderEmail\r\n";

	// Body message
	$message = "Name: " . $name . "<br>Email: " . $senderEmail . "<br>Message: " . $message . "";
	
	// Email Send Function
	$send_email = mail($to, $subject, $message, $headers);

	echo ($send_email) ? '<div class="success">Email has been sent successfully.</div>' : '<div class="failed">Failed: Email did not send.</div>';
} else {
	echo '<div class="failed">Failed: Email not Sent.</div>';
}
