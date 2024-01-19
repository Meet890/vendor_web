
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
$name = $username = $password = $address  = $gender = $email = $services = $profession = $mobileno = $experience = "";
$name_err = $username_err =  $email_err = $password_err =  $address_err= $gender_err = $services_err = $profession_err = $mobileno_err= $experience_err="";
//validation
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
// Processing form data when form is submitted
{

    //name valiadte
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you get the username from a form
    $name = $_POST['v_name'];
    
    // Check if the fname is set and contains only letters
    if (isset($name) && preg_match("/^[a-zA-Z]*$/", $name)) {
       // echo "Valid fname: " . htmlspecialchars($fname);
        //$cfname =$fname;
        
    } else {
        $name_err = "Invalide fname.";
        //echo "Invalid fname. fnames must contain only letters.";
    }
   }

    // Validate username
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Assuming you get the username from a form
 $username = $_POST['v_username'];
 // Check if the username is set and meets criteria
 if (isset($username) && preg_match("/^[a-zA-Z0-9_]{5,}$/", $username)) {
     //$useranme= "Valid username: " . htmlspecialchars($username);
 } else {
     $username_err="Invalid Username";
     //echo "Invalid username. Usernames must be at least 5 characters long and can only contain letters, numbers, and underscores.";
 }
}


    //email validate
    if (empty($_POST["v_email"])) 
    {
    $email_err = "Email is required";
    } else
     {
    $email = test_input($_POST["v_email"]);
     }
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
     {
		$email_err = "Invalid email format";
		}else
    {
		$email = $_POST["v_email"];
		}
	

	//VALIDATION PHONE NO
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$mobileno_err="phone no is required";
		// Assuming you get the mobile number from a form
		$mobileno = $_POST['mobileno'];
	   if (is_numeric($mobileno) && strlen($mobileno) == 10) {
			//echo "Valid mobile number: " . htmlspecialchars($mobileno);
		} else {
			//$mobileno_err= "Invalid mobile number.";
		}
	}
 // Validate password
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you get the password from a form
    $password = $_POST['password'];

    // Validate password
    if (preg_match('/^\d{6}$/', $password)) {
		$password_err="Invalid password. Please enter a password consisting of exactly 6 digits.";
        
    } else {
		$password="Valid password: " . htmlspecialchars($password);
        
    }
}
      
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you get the experience from a form
	//$experience = $_POST['v_experience'];
	//$experience_err="experience is required";

    // Validate experience field
    if (is_numeric($experience)  && strlen($experience) == 2) {
		$experience_err="invalid number.";
        } else {
			$experience=$_POST["experience"];
		//echo "Valid experience: " . htmlspecialchars($experience) . " years";
       // echo "Invalid experience. Please enter a valid positive integer for the experience field.";
    }
 }


// Check input errors before inserting in database
 if(empty($name_err)  && empty($username_err) && empty($email_err) && empty($password_err) && empty($profession_err) && empty ($experience_err) && empty($mobileno_err)&& empty($address_err) &&($gender_err)&&empty($services_err)){
    
     $sql = "INSERT INTO vendor (v_name, v_username, v_password, v_email, v_phoneno, v_address, v_gender  ,v_ser_places ,v_profession ,v_experience)  VALUES ('$name','$username','$password','$email','$mobileno','$address','$gender','$services','$profession','$experience')";

     if(mysqli_query($conn, $sql)==true){
         // Redirect to login page
         header("location: login.php");
     } else{
         echo "Oops! Something went wrong. Please try again later.";
     }
 
     
 }

 // Close connection
 mysqli_close($conn);
 
 
}

  

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
        .password .pass-icon{
            position: absolute;
            top:39px ;
            right: 10px;
            width: 24px;
            cursor: pointer;
        }
	</style>
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
				<form class="g-2  needs-validation" action="" method="post" novalidate>


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

				<div class=" form-outline mb-2 password-container password">
                <label class="form-label ">Password</label>
                <img src="eye-close.png" onclick="pass()" class="pass-icon" id="pass-icon">

                <input type="password" name="password"  class="form-control rounded-pill" id ="password" <?php echo (empty($password_err)) ? 'is-invalid' : ''; ?>">
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
				    <input type="email" class="form-control rounded-pill <?php echo (!empty($email_err)) ?  : ''; ?>" value="<?php echo $email; ?>" name="v_email" id="enteremail" aria-describedby="inputGroupPrepend" required>
                    <span class="invalid-feedback"><?php echo $email_err; ?></span>
				</div>

				<div class="form-outline mb-2">
                <label class ="form-label">Mobile Number</label>
                <input type="text" name="mobileno" class="form-control rounded-pill <?php echo (!empty($mobileno_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $mobileno; ?>" name="v_phoneno" id="enterphoneno" aria-describedby="inputGroupPrepend" required>
                <span class="invalid-feedback"><?php echo $mobileno_err; ?></span>
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
				<div class="form-outline mb-2">
					<div class="row">
						<div class="col-12">
                  <label for="enter_place" class="form-label">Taluka</label>
				  
				  <select style="width: 100%;";  class=" align-text-center form-select rounded-pill " name="v_ser_places" placeholder="select city" required >
				  <option value="All area of Kachchh">All area of Kachchh</option>			
				  <option value="Bhuj">Bhuj</option>
        	<option value="Gandhidham">Gandhidham</option>
          <option value="Mandvi">Mandvi</option>
          <option value="Anjar">Anjar</option>
          <option value="Mundra">Mundra</option>
          <option value="Bhachau">Bhachau</option>
          <option value="Naliya">Abadasa</option>
          <option value="Lakhpat">Lakhpat</option>
          <option value="Khavda">Rapar</option>
          <option value="Nakhatrana">Nakhatrana</option>
 </select>
				   </div>
				   </div>
				</div>   
				
				<div class="form-outline mb-2">
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

				 <div class="form-outline mb-2">
                <label class="form-label">Experience</label>
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
				</div>
			</div>		
		</div>
</div>
</div>	
</div>
</div>
</section>
<script>

//     Optional JavaScript; choose one of the two! 
//    Option 1: Bootstrap Bundle with Popper 
//     <script src="../js/bootstrap.bundle.js"></script>
	 <script src="../js/multiselect-dropdown.js"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS  -->
     <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     -->
    </body>
</html>
	