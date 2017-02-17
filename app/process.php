<?php
require_once('../includes/config.php');
require_once('../includes/PHPMailer/PHPMailerAutoload.php');

ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");

function sanitize($text) {
    $text = trim($text);
    
    if (get_magic_quotes_gpc()) {
        $text = stripslashes($text);
    }
    return $text;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $entries = array();
    $errors = array();
    error_log($entries);
    // Escape and extract all the post values
    foreach ($_POST as $key => $value) {
        $entries[$key] = sanitize($value);
    }
    
    // Get a set of variable variables for easier use
    foreach ($entries as $key => $value) {
        ${$key} = $value;
    }
    
    // Validate each form field
    if (empty($name)) {
        $errors['name'] = 'Ce champ est obligatoire.';
    }
    if (empty($email)) {
        $errors['email'] = 'Ce champ est obligatoire.';
    }
    elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $errors['email'] = 'Veuillez saisir votre adresse email.';
    }
    if (empty($message)) {
        $errors['message'] = 'Ce champ est obligatoire';
    }
    
    if (empty($errors)) {

        $formOK = true;

        $mail = new PHPMailer;
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 2;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host = MAIL_HOST;
		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port = MAIL_PORT;
		//Whether to use SMTP authentication
		$mail->SMTPAuth = false;
		//Set who the message is to be sent from
		$mail->setFrom($email, $name);
		//Set an alternative reply-to address
		$mail->addReplyTo($email, $name);
		//Set who the message is to be sent to
		$mail->addAddress(MAIL_ADDR, 'NG17 MEI');
		//Set the subject line
		$mail->Subject = 'NG17 contact';
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML($message);
		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';
		error_log( "before send" );
		//send the message, check for errors
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    echo "Message sent!";
		}
		
		error_log( "post send" );

    }
    else {
        $formOK = false;
    }
    
    //if this is not an ajax request  
    if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){  
        session_start();  
        $return_data = array(
            'formOK'  => $formOK,
            'errors'  => $errors,
            'entries' => $entries
        );
        $_SESSION['return_data']  = $return_data;
        header('Location: ' . BASE_URL);
        exit();
    } 
}
else {
    header('Location: ' . BASE_URL);
    exit();
}