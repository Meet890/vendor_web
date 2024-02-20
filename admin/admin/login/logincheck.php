<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'vendor');

if(isset($_POST['submit'])){
	$a_username = $_POST['a_username'];
	$a_password = $_POST['a_password'];

	$sql = " select * from admin where a_username ='$a_username' and a_password ='$a_password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['admin'] = $a_username;
			header('location:adminmainpage.php');
		}else{
			echo "login failed";
			header('location:adminlogin.php');
		}

}


?>
