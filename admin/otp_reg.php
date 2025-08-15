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
$sql ="SELECT reg_email, reg_name FROM registration WHERE reg_username= '$username'";
    $result = mysqli_query($conn, $sql); 
   
    while ($row = $result->fetch_assoc()) {
    
       
$email =  $row['reg_email'];
$name =   "Dear".$row['reg_name'] ;
echo $email;
echo $name;
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
    $mail->Username   = 'kachchhivent00@gmail.com';                     //SMTP username
    $mail->Password   = 'fxgs hxrp ekrx buva';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kachchhivent00@gmail.com', 'kachchhivent');
    $mail->addAddress($email, $name);     //Add a recipient ..........................
    $mail->addReplyTo('kachchhivent00@gmail.com', 'kachchhivent');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirm your account';
    $mail->Body    = 'Your OTP is : <b>'.$_SESSION["otp"].'</b>';
    $mail->AltBody = '';

   if($mail->send()){
    // this for normal payments
    // header("Location: submitregotp.php");


    // now i add rozerpay in this website
    header("Location: vendor/razorpay-sample-project/index.php");
   }
    
} catch (Exception $e) {
    echo "Message could not be sent. Check your connection";
}
}

?>