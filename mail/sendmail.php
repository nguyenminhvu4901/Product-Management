
<?php
include"PHPMailer-master/src/PHPMailer.php";
include"PHPMailer-master/src/Exception.php";
include"PHPMailer-master/src/OAuth.php";
include"PHPMailer-master/src/POP3.php";
include"PHPMailer-master/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($to, $username, $password){
$mail = new PHPMailer(true);  
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'xuanly0060277@gmail.com
';                 // SMTP username
    $mail->Password = 'vajvumprlcoiayyy';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('xuanly0060277@gmail.com', 'Mailer');
    $mail->addAddress($to, 'Xin chao');     // Add a recipient
     // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test Mail';
    $mail->Body = "Tai khoan cua ban la: ".$username." va mat khau la: ".$password;
    $mail->AltBody = 'Ko có gì ';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}
?>
