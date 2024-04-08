<?php
require 'config.php';
session_start();
$otp_err=$err="";

// $username = $_GET["username"];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
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
  
    $mail->addReplyTo('kachchhivent00@gmail.com', 'kachchhivent');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

   try {
    $id =$_GET['id'];
    $sql = "SELECT reg_name,reg_email FROM registration where reg_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          $name = "Dear ".$row["reg_name"];
          $email = $row['reg_email'];

      
    $mail->addAddress($email, $name);     //Add a recipient ..........................
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your account is now activated';
    $mail->Body    = 'You can login in our kachchhivent website..'.'</b>';
    $mail->AltBody = '';
    $mail->send();
   echo "<br>".$name."<br>".$email;

    header('Location: Register.php');
        }
    }


} catch (Exception $e) {
    echo "Message could not be sent. Check your connection";
}


   ?>