<?php

$conn = mysqli_connect("localhost", "root", "", "vendor");
session_start();
 // Check connection
 if($conn === false){
	 die("ERROR: Could not connect. "
		 . mysqli_connect_error());
 }

// by default, error messages are empty
$valid=$nameErr=$usernameErr=$phoneErr=$emailErr=$passErr=$cpassErr=$AddErr=$GenErr=$cnameErr='';

// by default,set input values are empty
$set_Name=$set_username=$set_PhoneNo=$set_email=$set_pass=$set_cpass=$set_add=$set_Gender=$set_ComName=$v_gender='';    
 extract($_POST);

if(isset($_POST['register']))
{
   
   //input fields are Validated with regular expression
   $validName="/^[a-zA-Z ]*$/";
   $validUserName="/^[A-Za-z0-9_]+$/";
   // $validEmail=; //@gmail.com @yahoo.com @hotmail.com @aol.com @outlook.com;
   $uppercasePassword = "/(?=.*?[A-Z])/";
   $lowercasePassword = "/(?=.*?[a-z])/";
   $digitPassword = "/(?=.*?[0-9])/";
   $spacesPassword = "/^$|\s+/";
   $symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
   $minEightPassword = "/.{8,}/";
   $phoneNo="/^[0-9]{10}+$/";

  //  First Name Validation
if(empty($name)){
   $fnameErr="First Name is Required"; 
}
else if (!preg_match($validName,$name)) {
   $nameErr="Digits are not allowed";
}else{
   $nameErr=true;
}

//  last Name Validation
if(empty($username)){
   $usernameErr="username is Required"; 
}
else if (!preg_match($validUserName,$username)) {
   $usernameErr="Only characters and digits are allowed";
}else{
   $pattern = "/\badmin\b/i";

// Use preg_match to check if the pattern is found in the file name
if (preg_match($pattern, $username)) {
   $usernameErr="Invalid name.. You cannot contain 'admin'.";
} else {
    $usernameErr=true;
}

}

//  phone no Validation
if(empty($Phone_no)){
   $phoneErr="Phone no is Required"; 
}
else if (!preg_match($phoneNo,$Phone_no)) {
   $phoneErr="Enter 10 digit";
}
else{
   $phoneErr=true;
}

//Email Address Validation
if(empty($email)){
  $emailErr="Email is Required"; 
}

else{
  $emailErr=true;
}
    
// password validation 
if(empty($password)){
  $passErr="Password is Required"; 
} 
elseif (!preg_match($uppercasePassword,$password) || !preg_match($lowercasePassword,$password) || !preg_match($digitPassword,$password) || !preg_match($symbolPassword,$password) || !preg_match($minEightPassword,$password) || preg_match($spacesPassword,$password)) {
  $passErr="Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length";
}
else{
   $passErr=true;
}

// form validation for confirm password
if($cpassword!=$password){
   $cpassErr="Confirm Password doest Matched";
}
else{
   $cpassErr=true;
}

// Address Validation

if(empty($Address)){
   $AddErr="Address is Required"; 
 } 
else{
   $AddErr=true;
 }

//  Gender validation

if(empty($v_gender)){
   $GenErr="Gender is Required"; 
 } 
else{
   $GenErr=true;
 }

  //  compony Name Validation
if(empty($compony_name)){
   $cnameErr="Compony Name is Required"; 
}
else if (!preg_match($validName,$name)) {
   $cnameErr="Digits are not allowed";
}else{
   $cnameErr=true;
}
 
if(strpos($email,'@gmail.com') || strpos($email,'@yahoo.com') || strpos($email,'@hotmail.com') || strpos($email,'@aol.com') || strpos($email,'@outlook.com') != false)
{
// check all fields are valid or not
if($nameErr==1 && $usernameErr==1 && $phoneErr==1 && $emailErr==1 && $passErr==1 && $cpassErr==1 && $AddErr==1 && $GenErr==1 && $cnameErr==1 )
{
   

   
   
   //legal input values
   $name= legal_input($name);
   $username= legal_input($username);
   $phoneNo=  legal_input($Phone_no);

   $email=     legal_input($email);
   $password=  legal_input($password);
   $address=  legal_input($Address);
   $gender=   legal_input($v_gender);
   $comname= legal_input($compony_name);
   $sql = "INSERT INTO registration (reg_name, reg_username, reg_phone, reg_email, reg_pass, reg_add, reg_gen, reg_com)  VALUES ('$name','$username','$phoneNo','$email','$password','$address','$gender','$comname')";
   if(mysqli_query($conn, $sql)==true){
      // Redirect to login page
      $_SESSION["test_username"]=$username;
      header("location: scanner.php");
  } else{
      echo "Oops! Something went wrong. Please try again later.";
  }
   $valid="All fields are validated successfully";
   // here you can write Sql Query to insert user data into database table
}else{
     // set input values is empty until input field is invalid
     $set_name=$name;
     $set_username=$username;
     $set_PhoneNo=$Phone_no;
    //  $set_lastName= $last_name;
     $set_email=$email;
     $set_pass=$password;
     $set_cpass=$cpassword;
     $set_add=$Address;
     $set_Gender=$v_gender;
     $set_ComName=$compony_name;
}
}else{
   $emailErr="Invalid Email Address";
   $set_name=$name;
   $set_username=$username;
   $set_PhoneNo=$Phone_no;
  //  $set_lastName= $last_name;
   $set_email=$email;
   $set_pass=$password;
   $set_cpass=$cpassword;
   $set_add=$Address;
   $set_Gender=$v_gender;
   $set_ComName=$compony_name;

}


}


// convert illegal input value to ligal value formate
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;

}
?>