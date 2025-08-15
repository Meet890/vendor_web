<?php
session_start();
$id= $_GET["id"];
// echo $_SESSION["vid"];
echo $_GET["id"];
header("Location: client/login/login.php?id=$id");
?>
<!-- <script>window.location.href = "client/login/login.php?id=<?php echo $id ;?>";</script> -->
