<?php
     require 'config.php';

         $id = $_GET['id'];
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
         
         echo $id;
         $sql ="SELECT * FROM vendor WHERE reg_id=$id";
        
         $res =mysqli_query($conn , $sql );
         if ($res == true) {
            while ($row= mysqli_fetch_assoc($res)) 
            {
                $v_id =$row['v_id'];
                $name ='Dear '.$row['v_name'];
                $email =$row['v_email'];
                $sql ="DELETE FROM gallery WHERE v_id='$v_id'";
                $res =mysqli_query($conn , $sql );
       
       
                if ($res == true) {
         $sql ="DELETE FROM vendor WHERE v_id='$v_id'";
         $res =mysqli_query($conn , $sql );


         if ($res == true) {
            $sql ="DELETE FROM registration WHERE reg_id='$id'";
        $res =mysqli_query($conn , $sql );


        if ($res == true) {
            $mail->addAddress($email, $name);     //Add a recipient ..........................
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Your applied registration is rejected";
            $mail->Body    = "Your registered account has been cancelled / deleted due some resons, Your pay that will be returned within 3 days.. Condition (if Your account is not accepted). if dont get payment contact admin ".'</b>';
            $mail->AltBody = '';
            $mail->send();

            header("Location: register.php");
        }
            //  header("Location: register.php");
         }
        }
    }  
}
        
        
     

    ?>