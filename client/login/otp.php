<?php
require 'config.php';
session_start();
$otp_err=$err="";
$username = $_GET["username"];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);





$_SESSION["username"]= $username;
$sql ="SELECT c_email, c_name FROM client WHERE c_username= '$username'";
    $result = mysqli_query($conn, $sql); 
   
    while ($row = $result->fetch_assoc()) {
    
       
$email =  $row['c_email'];
$name =   "Dear".$row['c_name'] ;
// echo $email;
// echo $name;
$_SESSION["otp"] =( rand(100000,999999));
echo $_SESSION["otp"];
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kachchhivent@gmail.com';                     //SMTP username
    $mail->Password   = 'jotw vkrr nwqe awsx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kachchhivent@gmail.com', 'kachchhivent');
    $mail->addAddress($email, $name);     //Add a recipient ..........................
    $mail->addReplyTo('kachchhivent@gmail.com', 'kachchhivent');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirm your account';
    $mail->Body    = 'Your OTP is : <b>'.$_SESSION["otp"].'</b>';
    $mail->AltBody = '';

   if($mail->send()){
    header("Location: submitotp.php");
   }
    
} catch (Exception $e) {
    echo "Message could not be sent. Check your connection";
}
}

?>