<?php // Initialize the session
// Check if the user is already logged in, if yes then redirect him to welcome page
 include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="mt-5"><a href="https://www.myprograming.com/" target="blanck" >Wel Come HOME</a></h1>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["c_username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>