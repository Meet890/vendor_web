
<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["v_username"]) &&( $_SESSION["loggedin"] === true)){
    header("location: vendor/");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
// Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
        $pass= $_POST["password"];
    }
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT v_id, v_username, v_password FROM vendor WHERE v_username = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s",$param_username);
            // Set parameters
            $param_username = $username;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $c_password);
                    
                    if(mysqli_stmt_fetch($stmt)){
                       $pass= $_POST["password"];
                      // echo $pass;
                        if($pass == $c_password){
                            echo $password;
                            echo $c_password;
                            
                            // Password is correct, so start a new session
                            session_start();
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                           
                            echo '<script>  alert("connected"); </script>';
                            header("location: vendor/index.php");
                        }else{
                            // Password is not valid, display a generic error message
                          
                            // echo '<script>  alert("Invalid password"); </script>';
                            $login_err = "Invalid Password.";
                        }
                    }
                    else{
                        // Password is not valid, display a generic error message
                      
                        // echo '<script>  alert("Username is invalid"); </script>';
                        $login_err = "Invalid Username";
                    }
                }
                else{
                   // Prepare a select statement
         $sql = "SELECT * FROM admin_tbl WHERE a_username = ?";

         if($stmt = mysqli_prepare($conn, $sql)){
             // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "s",$param_username);
             // Set parameters
             $param_username = $username;
             // Attempt to execute the prepared statement
             if(mysqli_stmt_execute($stmt)){
                 // Store result
                 mysqli_stmt_store_result($stmt);
                 // Check if username exists, if yes then verify password
                 if(mysqli_stmt_num_rows($stmt) == 1){
                     // Bind result variables
                     mysqli_stmt_bind_result($stmt, $id, $username, $c_password);
                     
                     if(mysqli_stmt_fetch($stmt)){
                        $username2 = $_POST["username"];
                        $sql2 = "SELECT a_password FROM admin_tbl WHERE a_username = '$username2'";
                        $result = mysqli_query($conn, $sql2);
                            if ($row = mysqli_fetch_assoc($result)){
                        
                             // Password is correct, so start a new session
                             
                    
                                if($password==$row["a_password"]){
                            // echo $c_password;
                            // echo $password;
                            // echo $row["a_password"];
                            // Store data in session variables
                             $_SESSION["loggedin"] = true;
                             $_SESSION["a_id"] = $id;
                             $_SESSION["a_username"] = $username;
                            
                             echo '<script>  alert("connected"); </script>';
                             header("location: admin/index.php");
                                }else{
                                    // echo '<script>  alert("Password is invalid"); </script>';
                                    $login_err = "Invalid Password.";
                                }

                         }else{
                             
                           
                            //  echo '<script>  alert("Invalid Password"); </script>';
                            $login_err = "Invalid Password.";                                                                  
                         }
                     }else{
                        
                      
                        echo '<script>  alert("Invalid Username."); </script>';
                    }
                 }else{
                    
                  
                    // echo '<script>  alert("Invalid Username"); </script>';
                    $login_err = "Invalid Username.";
                }
         }else{
           
          
            echo '<script>  alert("Please try again after few minutes"); </script>';
        }
     }else{
        
      
        echo '<script>  alert("Please try again after few minutes"); </script>';
    }
     
                }
        }else{
            
          
            echo '<script>  alert("Please try again after few minutes"); </script>';
        }
    }
    else{
         
    }
}



    
}

?>