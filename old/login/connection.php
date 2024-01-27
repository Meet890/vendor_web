<?php
$servername="localhost";
$username="root";
$pass=" ";
$dn_name="login";
$conn =mysqli_connect($servername,$username,$pass,$dn_name);
if ($conn) 
{
	echo "FAIL";
}

else
{
echo "done";
}
?>




