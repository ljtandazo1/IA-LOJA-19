<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$cuerpoMail = $_POST['mensaje'];

$mail = new PHPMailer(true); // Passing `true` enables exceptions                             
try {
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output                                 
    $mail->isSMTP(); //Set mailer to use SMTP                                      
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'cfjimbo@gmail.com'; // SMTP username
    $mail->Password = 'dttodwpdyqgoeurq'; // SMTP application password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('cfjimbo@gmail.com', 'Cafrilosa'); // Sender email and name
    $mail->addAddress($correo); // Reciver email

    // if you want to send email to multiple users, then add the email addresses you which you want to send.
    //$mail->addAddress('reciver2@gmail.com');
    //$mail->addAddress('reciver3@gmail.com');

    //For Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');  // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // You can specify the file name

    //Content
    $mail->isHTML(true);// Set email format to HTML                                  
    $mail->Subject = $asunto; // Subject of the email
    $mail->Body    = $cuerpoMail;

    $mail->send();
    
    echo "<script language='javascript'>alert('Mensaje enviado');</script>";
    //window.location.href = 'location:./../index1.php';
    //echo "location:./../index1.php";
    

} catch (Exception $e) {
    echo "<script language='javascript'>alert('Mensaje errado');</script>", $mail->ErrorInfo;
}
?>
<!DOCTYPE html>
<html>
<head>
    <META HTTP-EQUIV="REFRESH" Content ="1;URL = http://localhost/CAFRILOSA%20REBUILD/index1.php">
</head>
<body>

</body>
</html>