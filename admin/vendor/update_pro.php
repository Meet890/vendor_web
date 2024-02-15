<?php
include_once"config.php";
if(isset($_GET['edit']))
{
    $id=$_GET['edit'];
    echo $id;
    $sql_query="SELECT * FROM create_profile WHERE p_id='$id' ";

    $result_set=mysql_query($sql_query);
    $fetched_row=mysql_fetch_array($result_set);


}
 if(isset($_POST['btn-update']))
 {
     // variables for input data
     $first_name=$_POST['p_compony_name'];
     $last_name=$_POST['p_services'];
     $city_name=$_POST['p_email'];

     //sql query to update into database
    $sqli_query="UPDATE users SET p_compony_name='$first_name',p_services='$last_name',p_email='$city_name' WHERE p_id='$id' ";
    mysql_query($sql_query);
    //if(!$sql_query)
        //die('data can not update'.mysql_error());
    //else
        //echo 'data updated successfully';


 }
 ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<form method="post">
<table align="center">
<tr>
<td><input type="text" name="p_compony_name" placeholder="First Name" value="<?php echo $fetched_row['p_compony_name']; ?>"required />  </td>
</tr>
<tr>
<td><input type="text" name="p_services" placeholder="Last Name" value="<?php echo $fetched_row['p_services']; ?>" required /> </td>
</tr>
<tr>
<td><input type="text" name="p_email" placeholder="City" value="<?php echo $fetched_row['p_email']; ?>" required /> </td>
</tr>
<tr>
<td>
<button type="submit" name="btn-update"><strong>UPDATE</strong></button>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>