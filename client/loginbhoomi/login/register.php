<?php
// Include config file
require_once "config.php";
// Define variables and initialize with empty values
$username = $fname = $lname = $email = $password = $confirm_password = "";
$username_err = $fname = $lname = $email_err = $password_err = $confirm_password_err = "";
//validation
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
// Processing form data when form is submitted
{
       // Validate username
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you get the username from a form
    $username = $_POST['username'];
    // Check if the username is set and meets criteria
    if (isset($username) && preg_match("/^[a-zA-Z0-9_]{5,}$/", $username)) {
        echo "Valid username: " . htmlspecialchars($username);
    } else {
        $username_err="Invalid Username";
        //echo "Invalid username. Usernames must be at least 5 characters long and can only contain letters, numbers, and underscores.";
    }
}
      //fname valiadte
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you get the username from a form
    $fname = $_POST['fname'];

    // Check if the username is set and contains only letters
    if (isset($fname) && preg_match("/^[a-zA-Z]+$/", $fname)) {
        echo "Valid username: " . htmlspecialchars($fname);
    } else {
        echo "Invalid username. Usernames must contain only letters.";
    }
}

    //lname valiadte
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you get the username from a form
    $lname = $_POST['lname'];

    // Check if the username is set and contains only letters
    if (isset($lname) && preg_match("/^[a-zA-Z]+$/", $lname)) {
        echo "Valid username: " . htmlspecialchars($lname);
    } else {
        echo "Invalid username. Usernames must contain only letters.";
    }
}

       //email validate
       if ($_SERVER["REQUEST_METHOD"] == "POST") { 
       if (empty($_POST["email"])) {
       $email_err = "Email is required";
       } else {
       $email = test_input($_POST["email"]);
       // check if e-mail address is well-formed
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $email_err = "Invalid email format";
       }
       $email = $_POST["email"];
       }
    }


      // Validate password
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
}


  // Check input errors before inserting in database
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($username_err)  && empty($fname_err) && empty($lname_err)&& empty($email_err) && empty($password_err) && empty($confirm_password_err)){
       
        $sql = "INSERT INTO client (c_username,c_fname,c_lname, c_password,c_email) VALUES ('$username','$fname','$lname','$password','$email')";

        if(mysqli_query($conn, $sql)==true){
            // Redirect to login page
            header("location: login.php");
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    
        
    }
}
 
    // Close connection
    mysqli_close($conn);
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>

             <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="fname" class="form-control <?php echo (!empty($fname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fname; ?>">
                <span class="invalid-feedback"><?php echo $fname_err; ?></span>
            </div>

             <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lname" class="form-control <?php echo (!empty($lname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lname; ?>">
                <span class="invalid-feedback"><?php echo $lname_err; ?></span>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="myInput1" class="form-control onclick="myFunction() <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" id="myInput2" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                <input type="checkbox" onclick="myFunction()" class="mt-2">Show Password
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
<script>
        function myFunction() {
        var x = document.getElementById("myInput1");
        var y = document.getElementById("myInput2");
        if (x.type === "password") {
         x.type = "text";
         y.type="text";
         } else {
         x.type = "password";
         y.type="password";
  }
}
</script>
    </div>
</body>
</html>