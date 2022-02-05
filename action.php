<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer\Exception.php';
require_once 'phpmailer\PHPMailer.php';
require_once 'phpmailer\SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];
	$message = $_POST['Message'];

	try{
		$mail->isSMTP();
		$mail->Host ='smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'sunnins786@gmail.com';
		$mail->Password = '7019189167';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = '587';

		$mail->setFrom('sunnnins786@gmail.com');
		$mail->addAddress('sunnins786@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'Message Recieved(Contact Page)';
		$mail->Body ='<h3>Name: $name<br> Email: $email<br>Phone:$phone<br> Message:$message<br></h3>';

		$mail->send();
		$alert = '<p>Message not sent</p>';
			}
			catch(Exception $e){
				$alert = '<span>'.$e->getMessage()'</span>';
			}
}
?>