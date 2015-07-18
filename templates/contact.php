<?php 
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$name = htmlspecialchars($_POST['user']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
		
		// Send the email:
	$body = $_POST['message'];
		mail('jeff@pureautomotiverepair.com', $subject, "From: " . "$email" . "\n" . "You have recieved a new message from $name" . ":" . "\n" . "$body" . "\n", "From: $email");
	
	// Clear the posted values:
	$_POST = array();
	
	}
	header('Location: http://students.washington.edu/jeffma/test/final-project/#/contact/');
?>