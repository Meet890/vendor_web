
<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["c_username"]) &&( $_SESSION["loggedin"] === true)){
    header("location: index.php");
    exit;
}
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
// Processing form data when form is submitted



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
        header("Location: index.php");
    }
}
    else{
        echo "no user found";
        $login_err = "No account found for that username.";

    }
}

?>