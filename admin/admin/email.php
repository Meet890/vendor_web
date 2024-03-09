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
    $mail->Username   = 'kachchhivent@gmail.com';                     //SMTP username
    $mail->Password   = 'jotw vkrr nwqe awsx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kachchhivent@gmail.com', 'kachchhivent');
  
    $mail->addReplyTo('kachchhivent@gmail.com', 'kachchhivent');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name




$id = $_GET["id"];
$sql = "SELECT c_id, v_id ,report_dis FROM report where report_id = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $c_id = $row["c_id"];
      $v_id = $row["v_id"];
      $dis = $row["report_dis"];
      $sql = "SELECT c_name,c_email FROM client where c_id = '$c_id'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            $name = "Dear ".$row["c_name"];
            $email = $row['c_email'];
            
            echo $email;
            echo $name."<br>";

                try {
                    $mail->addAddress($email, $name);     //Add a recipient ..........................
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Thanks for Reporting';
                    $mail->Body    = 'Thanks for contact us ,We are here for you ...  '.'</b>';
                    $mail->AltBody = '';
                
                   

                } catch (Exception $e) {
                    echo "Message could not be sent. Check your connection";
                }
          }
      }
      else {
        echo "Error: " .mysqli_error($conn);
      }

      $sql = "SELECT v_name,v_email FROM vendor where v_id = '$v_id'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            $name =  "Dear ".$row["v_name"];
            $email =$row['v_email'];
            
            echo $email;
            echo $name;
            
                try {
                    $mail->addAddress($email, $name);     //Add a recipient ..........................
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Client Report you';
                    $mail->Body    = 'Please follow this this...'.'</b>'.$dis;
                    $mail->AltBody = '';
                
                   

                } catch (Exception $e) {
                    echo "Message could not be sent. Check your connection";
                }
          }
            
            header("Location: deletereport.php?id=".$id);
         
        
      }

      

}
}
?>