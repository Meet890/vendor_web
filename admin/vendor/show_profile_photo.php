<?php
require 'config.php';
?>
<div class="container-fluid">
    <div class="row">
<?php
if(isset($_SESSION["username"])){
    $v_username = $_SESSION["username"];
    }
    else{
        $v_username = $_GET['username'];
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vendor";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if($conn){
    echo"<br>";
    }
    else{
    die("Connection failed: " . mysqli_connect_error());
    }
    //   $i = 1;
    //   $ID= $_SESSION["v_id"];
      
        $rows = mysqli_query($conn, "SELECT v_photo FROM vendor WHERE v_username ='$v_username' ");
        while($row = $result->fetch_assoc()) {
            if($row['v_photo']==""){
                $img ="../../user2.png";
                //echo '<script>  alert("hello"); </script>';
            }
            else{
                $img = "img/".$row["v_photo"];
                //echo $img;
                //echo '<script>  alert("1"); </script>';
            }
        }
?>
<!-- $result = mysqli_query($conn, "SELECT v_photo FROM vendor WHERE v_username ='$v_username' "); -->
               
<div class="col-md-4 col-sm-6 " >
     <div class="card mt-2 ">
        <center>
          <div class="imgholder justify-content-center">
           <img src="img/<?php echo $img; ?>" class="card-img img1 p-2 " alt="...">
          </div>

          <div class="d-flex justify-content-center">
         <a href="delete_profile_photo.php?id=<?php echo $img;?>">
          <button class="submit btn border mb-2" >Delete</button>
      </a>
          </div>
      </center>
         </div>
</div>


</div>
</div>