<?php
 
 // servername => localhost
 // username => root
 // password => empty
 // database name => staff
 $conn = mysqli_connect("localhost", "root", "", "vendor");
  
 // Check connection
 if($conn === false){
	 die("ERROR: Could not connect. "
		 . mysqli_connect_error());
 }
 // Define variables and initialize with empty values
$name = $username = $password = $address  = $gender = $email = $services = $profession = $phoneno = $experience = "";
$name_err = $username_err =  $email_err = $password_err =  $address_err= $gender_err = $services_err = $profession_err = $phoneno_err= $experience_err="";
//validation
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name= $_POST["v_name"];
	$username=$_POST["v_username"];
	$password=$_POST["v_password"];
	$address= $_POST["v_address"];
	$gender=$_POST["v_gender"];
	$email=$_POST["v_email"];
	$services=$_POST["v_ser_places"];
	$profession=$_POST["v_profession"];
	$phoneno=$_POST["v_phoneno"];
	$experience=$_POST["v_experience"];
}

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
     }
   // Processing form data when form is submitted
   //name validation
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
	   if(empty($_POST["v_name"]))
	   {
		  // $name_err="please enter a valid name";
	   }
	   else
	   {
		   $name=test_input($_POST["v_name"]);
		   if(!preg_match("/^([a-zA-Z_'])*$/",$name))
		   {
			//    $name_err="only letters and white spaces allowed";
			echo"invalid username";
		   }
	   }
   }
  //username validation
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
	   if(empty($_POST["v_username"]))
	   {
		   //$username_err="please enter a valid name";
	   }
	   else
	   {
		   //$username=test_input($_POST["v_username"]);
		   if(!preg_match("/^([a-zA-Z0-9_'])*$/",$username))
		   {
			   $name_err="only letters and whitespaces and number allowed";
		   }
	   }
   }

     //Email validation
        if(empty($_POST["v_email"]))
       {
	   //$email_err="Invalid Email address ";
       }
       else
       { 
		$email=test_input($_POST["v_email"]);
		{
			if(filter_var($email,FILTER_VALIDATE_EMAIL) && preg_match('/@gmail\.com$/',$email))
			{
			$email_err="the email address is incorrect";
			}
		}
	 }
       //password validation
	 if (empty($_POST["v_password"]))
	 {
		//$password_err = "invalid password";
	 }
	 else
	 {
		 $password=test_input($_POST["v_password"]);
		 
		 if (strlen($password) >= 8 && preg_match('/[A-Za-z0-9]/', $password) && preg_match('/\d/', $password)) 
		 {
		  $password_err="password is incorrect";
		 }
		
	}
	
	
	if (empty($_POST["v_phoneno"])) 
	{
		//$mobileno_err="phoneno is required";
		$phoneno=isset($_POST["v_phoneno"]);
		if (is_numeric($phoneno) && strlen($phoneno) == 10)
		{
			$phoneno="valide"; 	
		} 
		else
	    {
		 $mobileno_err= "Invalid mobile number.";
		 
		}
	}	

     //mobileno validation
	/*if (empty($_POST["v_phoneno"])) 
	{
		//$mobileno_err="phoneno is required";
	}else
	{
		$mobileno=test_input($_POST["v_phoneno"]);
		{
		 if (is_numeric($phoneno) && strlen($phoneno) == 10) 
		 {
		  $mobileno_err= "Invalid mobile number.";
		 }
		}
	}*/

	if (empty( $_POST["v_experience"]))
	{
	//	$experience_err="experience is required";
	}else
	{
		$experience= test_input($_POST["v_experience"]);
		{
		if (is_numeric($experience) && $experience >= 0 && intval($experience) == $experience)
		{
		$experience_err="invalid number...please enter number";
		}
		}
	 }



// Check input errors before inserting in database
 if(empty($name_err)  && empty($username_err) && empty($email_err) && empty($password_err) && empty($profession_err) && empty ($experience_err) && empty ($phoneno_err)&& empty ($address_err) && empty($gender_err) &&empty($services_err))
 {
    
     $sql = "INSERT INTO vendor (v_name, v_username, v_password, v_email, v_phoneno, v_address, v_gender  ,v_ser_places ,v_profession ,v_experience)  VALUES ('$name','$username','$password','$email','$phoneno','$address','$gender','$services','$profession','$experience')";

     if(mysqli_query($conn, $sql)==true){
         // Redirect to login page
         header("location: login.php");
     } else{
         echo "Oops! Something went wrong. Please try again later.";
     }
 
     
 }

 // Close connection
 mysqli_close($conn);
 
 


  

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- Bootstrap CSS online -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<!--Bootstrap CSS ofline-->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/R_style.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Bootstrap Multiselect CSS -->
<link rel="stylesheet" href="css/bootstrap-multiselect.css">

<!-- Bootstrap Multiselect JS -->
<script data-main="dist/js/" src="js/require.min.js"></script>

    <title>Bootstrap Registration Form - Pagefist</title>
  </head>
 <body>
 <section class="vh-100 bg-image" style="background-image: url('img/background5.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-10 col-lg-9 col-xl-8">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Register As Vendor</h2>
 				<div class="row">
					<div class="col-6 p-1 ">
				<form class="g-2  needs-validation"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


				  <div class="form-outline mb-2">
				  <label class="form-label" for="form3Example1cg">Name</label>
				    <input type="text" class="form-control rounded-pill <?php echo (!empty($fname_err)) ? 'is-invalid' : ''; ?>" name="v_name" id="enterfirstname" value="<?php echo $name; ?>" required>
                    <span class="invalid-feedback"><?php echo $name_err; ?></span>
				</div>


				<div class="form-outline mb-2">
				    <label class="form-label " value="" for="form3Example1cg" >Username</label>
				    <input type="text" class="form-control rounded-pill <?php echo (!empty($username)) ? 'is-invalid' : ''; ?>"  name="v_username" id="enterlastname" value="<?php echo $username; ?>" required>
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
				</div>

				<div class=" form-group password-container password">
                <label>Password</label>
                <input type="password" name="password"  class="form-control rounded-pill" id ="password" <?php echo (empty($password_err)) ? 'is-invalid' : ''; ?>">
                <img src="eye-close.png" onclick="pass()" class="pass-icon" id="pass-icon">
                <!-- <span class="eye-icon" onclick="togglePasswordVisibility()">👁️</span> -->
            </div>
			<!--	<div class="form-outline mb-2 password">
				    <label class="form-label" for="form3Example1cg">Password</label>
				    <input type="password" class="form-control rounded-pill <?php echo (!empty($password_err)) ?  : ''; ?>" value="<?php echo $password; ?>" name="v_password" id="myinput" aria-describedby="inputGroupPrepend" required>
                    <img src="eye-close.png" onclick="pass()" class="pass-icon" id="pass-icon">
                    <span class="invalid-feedback">$services
			    </div>-->
				<div class="form-outline mb-2">
				    <label for="enteremail" class="form-label ">Email</label>
				    <input type="email" class="form-control rounded-pill <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" name="v_email" id="enteremail" aria-describedby="inputGroupPrepend" required>
                    <span class="invalid-feedback"><?php echo $email_err; ?></span>
				</div>

				<div class="form-group">
                <label>Mobile Number</label>
                <input type="text" name="v_phoneno" class="form-control rounded-pill <?php echo (!empty($phoneno_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phoneno; ?>" name="v_phoneno" id="enterphoneno" aria-describedby="inputGroupPrepend" required>
                <span class="invalid-feedback"><?php echo $phoneno_err; ?></span>
            </div>
				<!--<div class="form-outline mb-2">
				    <label for="enterphone" class="form-label">Mobile Number</label>
				    <input type="numbers" class="form-control rounded-pill" name="v_phoneno" id="v_phoneno" placeholder="Enter 10 digit" aria-describedby="inputGroupPrepend" required>
				</div>-->
				</div>
				<div class="col-6 p-1 ">

				<div class="form-outline mb-2">
				     <label for="Address" class="form-label">Address</label>
				     <input type="numbers" class="form-control rounded-pill" name="v_address" id="Address"  aria-describedby="inputGroupPrepend" required>
				</div>
 				<div class="form-outline mb-2">
                     <label for="Address" class="form-label">Gender</label>
                     <select class="form-select rounded-pill" name="v_gender" id="validationCustom04"  required>
				      <option selected disabled value=""></option>
				      <option value="m">Male</option>
				      <option value="f">Female</option>
                     </select>
				</div>	 
				<div class="form-outline mb-1">
					<div class="row">
						<div class="col-10">
                  <label for="enter_place" class="form-label">Select service area</label>
				  </div>
				  <div class="col-12">


				 <select style="width: 100%;";  id="mySelect" multiple="multiple" class="mb-3 align-text-center form-select rounded-pill selectpicker" name="v_ser_places" placeholder="select city" required >
        					<option value="Bhuj">Bhuj</option>
        					<option value="Gandhidham">Gandhidham</option>
         					<option value="Anjar">Anjar</option>
          					<option value="Mandvi">Mandvi</option>
          					<option value="Mundra">Mundra</option>
							<option value="Bhachau">Bhachau</option>
							<option value="Anjar">Anjar</option>
							<option value="Naliya">Naliya</option>
							<option value="Lakhpat">Lakhpat</option>
							<option value="Khavda">Khavda</option>
				   </select>
				   
				     <script>
                       require(['bootstrap-multiselect'], function(purchase){
                       $('#mySelect').multiselect();
                       });
                   </script>



				   
				   </div>
				   </div>
				</div>   
				
				<div class="form-outline mb-3">
				    <label for="validationCustom04" class="form-label">Profession</label>
				    <select class="form-select rounded-pill" name="v_profession" id="validationCustom04" <?php echo (!empty($profession_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $profession; ?>"required>
					<span class="invalid-feedback"><?php echo $profession_err; ?></span>
				      <option selected disabled value="">Choose...</option>
				      <option value="Decoration">Decoration</option>
				      <option value="Sound system">Sound system</option>
				      <option value="Catering">Catering</option>
				      <option value="Bakery">Bakery</option>
				      <option value="Photographer">Photographer</option>
				      <option value="Videographer">Videographer</option>
				      <option value="Flowers">Flowers</option>
					  <option value="Venue">Venue</option>
					  <option value="Invitation">Invitation Card</option>
				    </select>
			     </div>

				 <div class="form-group">
                <label>Experience</label>
                <input type="text" name="experience" class="form-control rounded-pill <?php echo (!empty($experience_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $experience; ?>" required>
                <span class="invalid-feedback"><?php echo $experience_err; ?></span>
            </div>
				  <!--<div class="col-md-12 mb-2">
				    <label for="zip1" class="form-label">Experience</label>
				    <input type="text" class="form-control rounded-pill" name="v_experience" id="zip1" required>
				    <div class="invalid-feedback">
				      Please provide a valid Experience.
				    </div>-->
				  </div>
              </div>
				  </div>
					
						<div class="col-12">
					    <div class="form-check">
					      <input class="form-check-input rounded-pill" type="checkbox" value="" id="invalidCheck" required>
					  <label class="form-check-label" for="invalidCheck">
					        Agree to terms and conditions
					   	</label>
					      <div class="invalid-feedback">
					        You must agree before submitting.
					      </div>
					    </div>
				  </div>
				  <div class="col-md-12 text-center ">
				    <button class="btn btn-secondary" title="Submit Your Form" aria-label=" Align" name="reg_user" type="submit"> <span class="fa fa-user-plus" aria-hidden="true"></span> Register</button>
				  </div>
				  <span class="extra-line text-center">
        			<span>Already have an account?</span>
         			<a href="login.php">Login</a>
       				</span>
				   </form>
				   <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
   </script>
   <script>
    var a;
    function pass()
    {
        if(a==1)
        {
            document.getElementById('password').type='password';
            document.getElementById('pass-icon').src='eye-close.png';
            a=0;
        }
        else
        {
            document.getElementById('password').type='text';
            document.getElementById('pass-icon').src='eye-open.png';
            a=1;
            
        }
    }
    </script>
	<style>
	 .password{
            display: inline-block;
            position: relative;
            width: 100%;
            /* border: 1px solid #000; */

        }
        .password input{
            /* padding: 10px 5px; */
            /* outline: none; */
            /* border: 0; */
        } 
        .pass-icon{
            position: absolute;
            top:34px ;
            right: 10px;
            width: 24px;
            cursor: pointer;
		}
	</style>
				</div>
			</div>		
		</div>
</div>
</div>	
</div>
</div>





//     Optional JavaScript; choose one of the two! 
//    Option 1: Bootstrap Bundle with Popper 
//     <script src="../js/bootstrap.bundle.js"></script>
	 <script src="../js/multiselect-dropdown.js"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS  -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
     <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     -->
    </body>
</html>
	