<?php

header('Content-Type: text/html; charset=UTF-8');

	$name	      = $_POST["name"];
	$email		  = $_POST["email"];
	$mensagem	  = $_POST["mensagem"];
	
	$Vai = "Nome: $name\n\nE-mail: $email\n\nMensagem: $mensagem\n";

	require_once("phpmailer/class.phpmailer.php");

	define('GUSER', 'cristiano.assis@caixaimoveis.com.br');	
	define('GPWD', '100355939239');

	function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {
		global $error;
		$mail = new PHPMailer();
		$mail->IsSMTP();		    // Ativar SMTP
		$mail->CharSet = 'UTF-8';
		$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
		$mail->SMTPAuth = true;		// Autenticação ativada
		$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
		$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
		$mail->Port = 465;  	
		$mail->Username = GUSER;
		$mail->Password = GPWD;
		$mail->SetFrom($de, $de_nome);
		$mail->Subject = $assunto;
		$mail->Body = $corpo;
		$mail->AddAddress($para);
		if(!$mail->Send()) {
			$error = 'Mail error: '.$mail->ErrorInfo;
			return false;
		} else {
			
			$error = array('code'=>200,'msg'=>'Mensagem enviada com sucesso!');
			return true;
		}
		
	}

	if (smtpmailer('cristiano.humberto.assis@gmail.com', 'cristiano.assis@caixaimoveis.com.br', $_POST["name"], 'Contato Site', $Vai)) {}
		if (!empty($error)) echo json_encode($error);
	

	else {
		if (!empty($msg)) echo json_encode($msg);
	}


?>
