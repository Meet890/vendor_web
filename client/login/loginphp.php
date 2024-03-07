
<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["c_username"]) &&( $_SESSION["loggedin"] === true)){
    header("location: index.php");
    exit;
}
else if(isset($_SESSION["username"])){
  header("location:../../admin/vendor/index.php");
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
    }
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT c_id, c_username, c_password FROM client WHERE c_username = ?";
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
                    mysqli_stmt_bind_result($stmt, $id, $username, $password);
                    
                    if(mysqli_stmt_fetch($stmt)){
                        if( $_POST["password"]= $password){
                            // Password is correct, so start a new session
                            
                              $sql = "SELECT * FROM client where c_username = '$uname'" ;
                              $result = mysqli_query($conn, $sql);

                              if ($result) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $_SESSION["c_id"] = "$row[c_id]";
                                    $_SESSION["c_username"] = "$row[c_username]";
                                    $_SESSION["c_name"] = "$row[c_name]";
                                    $_SESSION["c_city"] = "$row[c_city]";
                                    $_SESSION["c_email"] = "$row[c_email]";  
                                    $_SESSION["loggedin"] = "true";  
                                    ?>
                                    <script type="text/javascript">
                                        alert ="session is created";
                                        </script>
                                    <?php

                                }
                            }
                            echo '<script>  alert("connected"); </script>';
                            header("location: ../index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid password.";
                           // echo '<script>  alert("Password"); </script>';
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                   //echo '<script>  alert("no rows"); </script>';
                }
            }
        }
    }
}


 if(isset($_POST['submit'])){

  $uname = trim($_POST['username']);
  $pass  = trim($_POST['password']);

  $sql = "SELECT * FROM client where c_username = '$uname'" ;
  $result = mysqli_query($conn, $sql);
  
  if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION["c_id"] = "$row[c_id]";
        $_SESSION["c_username"] = "$row[c_username]";
        $_SESSION["c_name"] = "$row[c_name]";
        $_SESSION["c_city"] = "$row[c_city]";
        $_SESSION["c_email"] = "$row[c_email]";  
        $_SESSION["loggedin"] = "true";  
        ?>
        <script type="text/javascript">
            alert ="session is created";
            </script>
        <?php
       
    }
}
    else{
        echo "no user found";
        $login_err = "No account found for that username.";

    }
}

?>