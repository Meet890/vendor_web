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
				    <input type="text" class="form-control rounded-pill" name="v_name" id="enterfirstname" value="" required>
				</div>


				<div class="form-outline mb-2">
				    <label class="form-label " value="" for="form3Example1cg" >Username</label>
				    <input type="text" class="form-control rounded-pill"  name="v_username" id="enterlastname" value="" required>
				</div>
				<div class="form-outline mb-2">
				    <label class="form-label" for="form3Example1cg">Password</label>
				    <input type="text" class="form-control rounded-pill" value="" name="v_password" id="selectusername" aria-describedby="inputGroupPrepend" required>
			    </div>
				<div class="form-outline mb-2">
				    <label for="enteremail" class="form-label ">Email</label>
				    <input type="email" class="form-control rounded-pill" value="" name="v_email" id="enteremail" aria-describedby="inputGroupPrepend" required>
				</div>
				<div class="form-outline mb-2">
				    <label for="enterphone" class="form-label">Mobile Number</label>
				    <input type="numbers" class="form-control rounded-pill" name="v_phoneno" id="enterphone" placeholder="Enter 10 digit" aria-describedby="inputGroupPrepend" required>
				</div>
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
				<div class="form-outline mb-3">
					<div class="row">
						<div class="col-12">
                  <label for="enter_place" class="form-label">Select service area</label>
				  </div>
				  <div class="col-12">
				  <select style="width: 100%;"; multiple multiselect-select-all="true" class="mb-3 align-text-center form-select rounded-pill " name="v_ser_places" placeholder="select city" required >
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
				   </div>
				   </div>
				</div>   
				
				<div class="form-outline mb-2">
				    <label for="validationCustom04" class="form-label">Profession</label>
				    <select class="form-select rounded-pill" name="v_profession" id="validationCustom04" required>
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
				  <div class="col-md-12 mb-2">
				    <label for="zip1" class="form-label">Experience</label>
				    <input type="text" class="form-control rounded-pill" name="v_experience" id="zip1" required>
				    <div class="invalid-feedback">
				      Please provide a valid Experience.
				    </div>
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
				    <button class="btn btn-secondary" title="Submit Your Form" aria-label="Left Align" name="reg_user" type="submit"> <span class="fa fa-user-plus" aria-hidden="true"></span> Register</button>
				  </div>
				  <span class="extra-line text-center">
        			<span>Already have an account?</span>
         			<a href="login.php">Login</a>
       				</span>
  				 </form>
				</div>
			</div>		
		</div>
</div>
</div>	
</div>
</div>
</section>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/multiselect-dropdown.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
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
  
 // Taking all 5 values from the form data(input)
 if(isset($_POST['reg_user']))
 {
 $name =  $_POST['v_name'];
 $username = $_POST['v_username'];
 $pass =  $_POST['v_password'];
 $address = $_POST['v_address'];
 $gender= $_POST['v_gender'];
 $email = $_POST['v_email'];
 $services = $_POST['v_ser_places'];
 $profession = $_POST['v_profession'];
 $m_no = $_POST['v_phoneno'];
 $experience = $_POST['v_experience'];
  
 // Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO vendor(v_name, v_username, v_password,v_email, v_phoneno, v_address, v_gender  ,v_ser_places ,v_profession ,v_experience)  VALUES ('$name','$username','$pass','$email','$m_no','$address','$gender','$services','$profession','$experience')";
  
  $result = mysqli_query($conn, $sql);
 if ($result) {
    echo "";

	 //echo nl2br("\n$name\n $username\n "
		// . "$pass\n $address\n $gender \n $email\n $services\n $profession\n $m_no\n $experience");
   } 
 else{
	 echo "ERROR: Hush! Sorry $sql. "
		 . mysqli_error($conn);
   }
}
  
 // Close connection
 mysqli_close($conn);
 ?>
  </body>
</html>