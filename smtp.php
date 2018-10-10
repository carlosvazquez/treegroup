<?php
		$nombre = $_POST['nombre']; 
		$email = $_POST['email']; 
		$asunto = $_POST['asunto']; 
		$mensaje = $_POST['mensaje']; 

		//error_reporting(E_ALL);
		//error_reporting(E_STRICT);

		date_default_timezone_set('America/Mexico');

		require_once('class/class.phpmailer.php');
		//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

		$mail             = new PHPMailer();

		$body             = $mensaje;
		$body             = preg_replace('/\\\\/','',$body);

		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->Host       = "mail.911latinoamerica.com"; // SMTP server
		$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
		                                           // 1 = errors and messages
		                                           // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = "mail.911latinoamerica.com"; // sets the SMTP server
		$mail->Port       = 2525;                    // set the SMTP port for the GMAIL server
		$mail->Username   = "mkt@911latinoamerica.com"; // SMTP account username
		$mail->Password   = "fer110550!";        // SMTP account password

		$mail->SetFrom($email, $nombre);

		$mail->AddReplyTo($email, $nombre);

		$mail->Subject    = $asunto . " - enviado desde sitio web";

		//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

		$mail->BodySubject    = $asunto;


		$mail->MsgHTML($body);

		$address = "fcastane@treegroup.com.mx";
		$mail->AddAddress($address, "911latinoamerica.com");

		//$mail->AddAttachment("images/phpmailer.gif");      // attachment
		//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

		if(!$mail->Send()) {
			header( 'Location: http://www.911latinoamerica.com/error' ) ;
		} else {
			header( 'Location: http://www.911latinoamerica.com/enviado' ) ;
		}