<?php
// Initialize variables to store user input and error messages
$username = $email = $password = $confirm_password = "";
$username_error = $email_error = $password_error = $confirm_password_error = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty($_POST["username"])) {
        $username_error = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        // Additional username validation can be added here
    }

    // Validate email
    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Additional email validation can be added here
    }

    // Validate password
    if (empty($_POST["password"])) {
        $password_error = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        // Additional password validation can be added here
    }

    // Validate confirm password
    if (empty($_POST["confirm_password"])) {
        $confirm_password_error = "Confirm password is required";
    } else {
        $confirm_password = test_input($_POST["confirm_password"]);
        // Additional confirm password validation can be added here
    }

    // Check if there are no errors
    if (empty($username_error) && empty($email_error) && empty($password_error) && empty($confirm_password_error)) {
        // Process the registration (you can add database insertion logic here)

        // Redirect or display success message
        // header("Location: success.php");
        exit();
    }
}

// Function to sanitize and validate user input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="username" value="<?php echo $username; ?>">
        <span style="color: red;"><?php echo $username_error; ?></span><br><br>

        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $email_error; ?></span><br><br>

        Password: <input type="password" name="password">
        <span style="color: red;"><?php echo $password_error; ?></span><br><br>

        Confirm Password: <input type="password" name="confirm_password">
        <span style="color: red;"><?php echo $confirm_password_error; ?></span><br><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>