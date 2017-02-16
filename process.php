<?php
date_default_timezone_set('Etc/UTC');
require_once('includes/config.php');
require 'includes/PHPMailer/PHPMailerAutoload.php';

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
        $errors['name'] = 'This field is required.';
    }
    if (empty($email)) {
        $errors['email'] = 'This field is required.';
    }
    elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $errors['email'] = 'Please enter a valid email address.';
    }
    if (empty($message)) {
        $errors['message'] = 'This field is required';
    }
    
    if (empty($errors)) {
        
        $formOK = true;        
/*
        // Passing true causes PHPMailer to throw exceptions
        $mail = new PHPMailer;
        
        $mail->IsSMTP();
        $mail->SMTPDebug = true;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = MAIL_HOST;
        $mail->Port = MAIL_PORT;
        $mail->Username = MAIL_USER;
        $mail->Password = MAIL_PASS;
        $mail->SetFrom($email, $name);
        $mail->Subject = "Contact Form Submission";
        $mail->Body = "Your received the following message from $name <$email>:\r\n\r\n$message";
        $mail->AddAddress(MAIL_ADDR);
        
        if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Message has been sent';
		}
*/


		//Create a new PHPMailer instance
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
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication
		$mail->Username = MAIL_USER;
		//Password to use for SMTP authentication
		$mail->Password = MAIL_PASS;
		//Set who the message is to be sent from
		$mail->setFrom('from@example.com', 'First Last');
		//Set an alternative reply-to address
		$mail->addReplyTo('replyto@example.com', 'First Last');
		//Set who the message is to be sent to
		$mail->addAddress('whoto@example.com', 'John Doe');
		//Set the subject line
		$mail->Subject = 'PHPMailer SMTP test';
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';
		
		//send the message, check for errors
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    echo "Message sent!";
		}

/*
        catch (phpmailerException $e) {
            header("HTTP/1.1 500 Internal Server Error");
            echo "Exception occurred: ".$e->errorMessage();
            exit();
        }
*/
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