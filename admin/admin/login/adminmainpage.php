<?php
session_start();
if(!isset($_SESSION['a_username'])){
	header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<div class="container center-div shadow">
		<div class="heading text-center text-uppercase text-white mb-5"> Guys, Share with ur friends and subscribe my 
			<?php echo $_SESSION['a_username']?>Technical channel :) </div>
		<a href="logout.php" class="btn btn-danger">  Logout</a>
</div>



</body>
</html>