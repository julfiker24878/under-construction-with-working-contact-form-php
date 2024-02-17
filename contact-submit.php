<?php
session_start();

$errors = [];
$field_names = ['name'=>'Please enter your name!', 'email'=>'Please enter your email address!', 'subject'=>'Please enter your subject!', 'message'=>'Please enter your message!'];

foreach($field_names as $field_name=>$msg){
	if (empty($_POST[$field_name])) {
		$errors[$field_name] = $msg;
	}
}

$name = htmlentities($_POST['name'], ENT_QUOTES);
$email = htmlentities($_POST['email'], ENT_QUOTES);
$subject = htmlentities($_POST['subject'], ENT_QUOTES);
$message = htmlentities($_POST['message'], ENT_QUOTES);

if(count($errors) >= 1){
	$_SESSION['error'] = $errors;
	header('location: contact.php');
}elseif(strlen($name) > 60){
	$_SESSION['name_err'] = "MAXIMUM 60 CHARACTER!";
	header('location: contact.php');
}elseif(strlen($email) > 60){
	$_SESSION['email_err'] = "MAXIMUM 60 CHARACTER!";
	header('location: contact.php');
}elseif(strlen($subject) > 60){
	$_SESSION['subject_err'] = "MAXIMUM 60 CHARACTER!";
	header('location: contact.php');
}elseif(strlen($message) > 300){
	$_SESSION['message_err'] = "MAXIMUM 300 CHARACTER!";
	header('location: contact.php');
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$_SESSION['invalid_email'] = "Please enter a valid email address!";
	header('location: contact.php');
}else{
	$to = "youremail@gmail.com";
    $body = "";
    $body.= "From: ".$name."\r\n";
    $body.= "Email: ".$email."\r\n";
    $body.= "Message: ".$message."\r\n";

    mail($to, $subject, $body);
    $_SESSION['success'] = "Okay!";
	header('location: contact.php');
}