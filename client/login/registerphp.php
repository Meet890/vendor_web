<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $name = $city = $email = $password = $confirm_password = $checkbox= "";
$username_err = $name_err = $city_err = $email_err = $password_err = $confirm_password_err =$checkbox= "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $city = $_POST['select'];
    $email = test_input($_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    // $checkbox = $_POST["checkbox"];
    //echo $checkbox; ON 
// testing values
    // echo $name;
    // echo $city;
    // echo $email;
    // echo $username;
    // echo $password;
    // echo $confirm_password;
    
    if (isset($name) && preg_match("/^[a-zA-Z]{2,}$/", $name)){
        // echo '<script> alert("Welcome");  </script>';
        if (isset($city) && preg_match("/^[a-zA-Z]{2,}$/", $city)){
           // echo '<script> alert("Welcome");  </script>';
           if( strpos($email,'@gmail.com') || strpos($email,'@yahoo.com') || strpos($email,'@hotmail.com') || strpos($email,'@aol.com') || strpos($email,'@outlook.com') != false){
           if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email = test_input($_POST["email"]);
          //  echo '<script> alert("Welcome");  </script>';
            if (isset($username) && preg_match("/^[a-zA-Z0-9_]{5,}$/", $username)){
                //  echo '<script> alert("Welcome");  </script>';
                if (strlen($password) >= 6 && preg_match("/[a-zA-Z_]/", $password) && preg_match("/\d/", $password) && preg_match("/\w/", $password)&& !preg_match("/\s/", $password)) {
                    //  echo '<script> alert("Welcome");  </script>';
                    if(!empty(trim($_POST["confirm_password"]))){
                        $confirm_password = trim($confirm_password);
                        if($password == $confirm_password){
                            if(isset($_POST["checkbox"])){
                                $sql = "INSERT INTO client (c_username,c_name,c_city, c_password,c_email) VALUES ('$username','$name','$city','$password','$email')";
                                  
                                          if(mysqli_query($conn, $sql)==true){
                                              // Redirect to login page
                                              mysqli_close($conn);
                                              echo '<script>  alert("connected"); </script>';
                                              header("location: login.php");
                                          } else{
                                            
                                              echo "Oops! Something went wrong. Please try again later." .mysqli_error($conn);
                                          }
                            }
                            else{
                                echo '<script>  alert("Please Check terms and conditions"); setFocus();</script>';
                            }

                        }else{
                            echo '<script>  alert("both password shoud be same"); setFocus();</script>';
                        }

                    }else{
                        echo '<script>  alert("Please Enter Confirm Password"); setFocus();</script>';
                    }
                    

                } else {
                    // Invalid password
                    echo '<script>  alert("password must contain 8 characters with special symbols and number"); setFocus();</script>';
                }

            }
            else{
                echo '<script>  alert("Please Enter Valid Username"); setFocus();</script>';
            }

           }
           else{
                echo '<script>  alert("Please Enter Valid email"); setFocus();</script>';
           }
           
        }
           else{
            echo '<script>  alert("Please Enter Valid  Domain name"); setFocus();</script>'; 
           }

        }
        else{
            echo '<script>  alert("Please Enter Valid City"); setFocus();</script>';
        }

    }
    else{
        echo '<script>  alert("Please Enter Valid Name"); setFocus();</script>';
        

    }

}

?>