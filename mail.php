<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['comment'];

$sendingMessage="Name:'".$name."'\n   Email:'".$email."'\n  Subject:'".$subject."'\n\n  Message: '".message."'   ";

require("assets\PHPMailer-master\PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->SMTPAuth = true;
$mail->setFrom('admin@oiicl.com','Ashutosh Parashar');
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->Username = "joshiankit037@gmail.com"; //account with which you want to send mail. Or use this account. i don't care :-P
$mail->Password = "ashutosh9461037150parashar"; //this account's password.
$mail->setFrom("'"+$_REQUEST['email']+"'");
$mail->isSMTP();  // telling the class to use SMTP
$rec1="ashutoshparashar27@outlook.com"; //receiver. email addresses to which u want to send the mail.
$mail->AddAddress($rec1);
//$mail->AddAddress($rec1,$rec2,$rec3);
$mail->Subject  = "Mail from OIICL.com"; 
$mail->Body     = $sendingMessage;
$mail->WordWrap = 500;
if(!$mail->Send()) {

echo 'error ' ;//. $mail->ErrorInfo;
} else {
echo 'success';
}


?>