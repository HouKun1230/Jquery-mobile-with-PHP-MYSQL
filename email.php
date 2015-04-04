<?php
// require_once 'lib/PHPMailer-master/PHPMailerAutoload.php';
require_once('lib/PHPMailer-master/class.phpmailer.php');
require_once("lib/PHPMailer-master/class.smtp.php"); 

sleep(3);

$mail  = new PHPMailer(); 

$mail->IsSMTP();                           
$mail->CharSet    ="UTF-8";   
// $mail->SMTPDebug = 1;           
$mail->SMTPAuth   = true;                  
$mail->SMTPSecure = "ssl";                 
$mail->Host       = "smtp.163.com";      
$mail->Port       = 465;                 

$mail->Username   = "houkun1230@163.com";  
$mail->Password   = "zhuyuean891225";        

$mail->SetFrom('houkun1230@163.com', 'KunHou');    
$mail->AddReplyTo("houkun1230@163.com","KunHou");

$mail->Subject = 'A Warning From Your TODO app'; 
$mail->AltBody = 'A Warning From Your TODO app';

$mail->MsgHTML('A Warning From Your TODO app'); 

$mail->AddAddress('houkun1230@163.com', 'KunHou'); 
//$mail->AddAttachment("images/phpmailer.gif");

if(!$mail->Send()) {
    echo "fail to send：" . $mail->ErrorInfo;
} else {
    echo "send successfully!";
}
?>