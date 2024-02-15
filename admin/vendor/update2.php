<?php
include_once"config.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>CRUD Operations With php and MySql </title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<center>

<div id="body">
 <div id="content">
    <table align="center">

<table align="center">
<tr>
<th colspan="9"><a href="update_pro.php">Add data Here ! </a></th>
</tr>
<tr>
<th colspan="2">FirstName </th>
<th colspan="8">LastName</th>
<th colspan="4">CityName </th>
<th>Operations</th>

<!--<th colspan="2">Operations</th> -->
</tr>

<?php
 $sql_query="SELECT * FROM create_profile";
  $result_set=mysqli_query($sql_query);
  while($row=mysqli_fetch_row($result_set))
  {
      ?>
    <tr>
    <td><?php echo $row[0]; ?> </td>
    <td colspan="4"><?php echo $row[1]; ?></td>
    <td colspan="6"><?php echo $row[2];?></td>
    <td colspan="4"><?php echo $row[3];?></td>
    <td> <a href='update_pro.php?edit=$row[0]'>EDIT</a> </td>
    <td align="center"><a href="javascript edt_id('<//?php echo $row[0]; ?><img src="b_edit.png" align="EDIT" /></a></td>
     <td align="center"><a href="javascript:delete_id('<//?php echo $row[0];?><img src="b_drop.png" align="DELETE" /></a></td>
     </tr>  
     <?php

  }
     ?>

    </table>
    </div>
    </div>
    </center>
    </body>
    </html>