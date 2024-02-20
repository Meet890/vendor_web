<?php

$conn = mysqli_connect("localhost", "root", "", "vendor");
  
 // Check connection
 if($conn === false){
	 die("ERROR: Could not connect. "
		 . mysqli_connect_error());
 }

// by default, error messages are empty
$valid=$fnameErr=$lnameErr=$phoneErr=$emailErr=$passErr=$cpassErr=$AddErr=$GenErr=$cnameErr='';

// by default,set input values are empty
$set_firstName=$set_lastName=$set_PhoneNo=$set_email=$set_pass=$set_cpass=$set_add=$set_Gender=$set_ComName='';    
 extract($_POST);

if(isset($_POST['register']))
{
   
   //input fields are Validated with regular expression
   $validName="/^[a-zA-Z ]*$/";
   $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
   $uppercasePassword = "/(?=.*?[A-Z])/";
   $lowercasePassword = "/(?=.*?[a-z])/";
   $digitPassword = "/(?=.*?[0-9])/";
   $spacesPassword = "/^$|\s+/";
   $symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
   $minEightPassword = "/.{8,}/";
   $phoneNo="/^[0-9]{10}+$/";

  //  First Name Validation
if(empty($first_name)){
   $fnameErr="First Name is Required"; 
}
else if (!preg_match($validName,$first_name)) {
   $fnameErr="Digits are not allowed";
}else{
   $fnameErr=true;
}

//  last Name Validation
if(empty($last_name)){
   $lnameErr="last Name is Required"; 
}
else if (!preg_match($validName,$last_name)) {
   $lnameErr="Digits are not allowed";
}else{
   $lnameErr=true;
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
else if (!preg_match($validEmail,$email)) {
  $emailErr="Invalid Email Address";
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
else if (!preg_match($validName,$first_name)) {
   $cnameErr="Digits are not allowed";
}else{
   $cnameErr=true;
}
 

// check all fields are valid or not
if($fnameErr==1 && $lnameErr==1 && $phoneErr==1 && $emailErr==1 && $passErr==1 && $cpassErr==1 && $AddErr==1 && $GenErr==1 && $cnameErr==1 )
{
   

   
   
   //legal input values
   $firstName= legal_input($first_name);
   $lastName= legal_input($last_name);
   $phoneNo=  legal_input($Phone_no);

   $email=     legal_input($email);
   $password=  legal_input($password);
   $address=  legal_input($Address);
   $gender=   legal_input($v_gender);
   $comname= legal_input($compony_name);
   $sql = "INSERT INTO registration (r_fname, r_lname, r_phone, r_email, r_pass, r_add, r_gen, r_com)  VALUES ('$firstName','$lastName','$phoneNo','$email','$password','$address','$gender','$comname')";
   if(mysqli_query($conn, $sql)==true){
      // Redirect to login page
      header("location: login.php");
  } else{
      echo "Oops! Something went wrong. Please try again later.";
  }
   $valid="All fields are validated successfully";
   // here you can write Sql Query to insert user data into database table
}else{
     // set input values is empty until input field is invalid
    $set_firstName=$first_name;
    $set_lastName=$last_name;
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