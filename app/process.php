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

    // Escape and extract all the post values
    foreach ($_POST as $key => $value) {
        $entries[$key] = sanitize($value);
    }
    
    // Get a set of variable variables for easier use
    foreach ($entries as $key => $value) {
	    error_log($value);
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
		// set utf8 char
		$mail->CharSet = 'UTF-8';
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
		$mail->Subject = $subject;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML('<p>contact: '. $name . ': ' . $email . '</p>' . $message);
		
		//send the message, check for errors
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    echo "Message sent!";
		}
		
		//SENT RESOPONSE MESSAGE
		if($subject == 'NG17 participant') {
			$subject == 'NG17 participation';
			//Clear recipiant
			$mail->ClearAllRecipients();
			//Set who the message is to be sent from
			$mail->setFrom("mei@heig-vd,ch", 'NG17 MEI');
			//Set an alternative reply-to address
			$mail->addReplyTo("mei@heig-vd,ch", 'NG17 MEI');
			//Set who the message is to be sent to
			$mail->addAddress($email, $name);
			
			//convert HTML into a basic plain-text alternative body
			$mail->msgHTML('<table><tr><td style="padding-bottom: 60px"><p>Merci pour votre intérêt au projet de mapping vidéo de Numerik Games 2017.</p><p>Vous trouverez les informations nécessaires pour commencer votre projet sur cette page: <a href="ng17.heig-vd.ch/kit">ng17.heig-vd.ch/kit</a></p><p>Cette page web est sujet à changements dans les prochaines semaines. En cas de changement, on vous contactera par e-mail.</p><p>N’hésitez pas à nous contacter en cas de question ou de doute</p><p>Bonne créations</p></td></tr><tr><td style="padding-bottom: 20px"><p>Thank you for you interest to Numerik Games 2017\'s video mapping project.</p><p>You will find all the information you need on this page <a href="ng17.heig-vd.ch/kit-en">ng17.heig-vd.ch/kit-en</a></p><p>This page is subject to change in the early days of the project. If this is the case will inform you by e-mail</p><p>Don\'t hesitate to contact us with any questions or doubt</p><p>happy creating</p></td></tr><tr><td><span style="padding-right: 40px"><img height="60" src="http://age.heig-vd.ch/wp-content/uploads/2013/09/HEIG-VD_Logo.png" alt="Haute École d\'Ingénierie et de Gestion du Canton de Vaud"></span><span><img height="60" src="http://www.heig-vd.ch/images/default-source/formation-temoignages-decouverte/mei_logo08326f52ce6060dfac07ff000015d99b.png?sfvrsn=0" alt="Le Media Engineering Institute"></span></td></tr></table>');
	
			
			//send the message, check for errors
			if (!$mail->send()) {
			    echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
			    echo "Message sent!";
			}
		}
		

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