<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

//    $name = @trim(stripslashes($_POST['name']));
//    $email = @trim(stripslashes($_POST['email']));
//    $subject = @trim(stripslashes($_POST['subject']));
//    $message = @trim(stripslashes($_POST['message']));

    $name = @trim(stripslashes("Pinsara"));
    $email = @trim(stripslashes("pinsarakweerasinghe@gmail.com"));
    $subject = @trim(stripslashes("Hi"));
    $message = @trim(stripslashes("How are you!"));


$email_from = $email;
    $email_to = 'pinsarakweerasinghe@gmail.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;