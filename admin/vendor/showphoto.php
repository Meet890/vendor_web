<div class="container-fluid">
    <div class="row">
<?php
      $i = 1;
      $ID= $_SESSION["v_id"];
      
        $rows = mysqli_query($conn, "SELECT * FROM gallery WHERE v_id = $ID ORDER BY g_id DESC")
?>

      <?php foreach ($rows as $row) : ?>            
<div class="col-md-4 col-sm-6 " >
     <div class="card ">
          <div class="imgholder justify-content-center">
           <img src="img/<?php echo $row["g_photo"]; ?>" class="card-img img1 p-2 " alt="...">
          </div>

          <div class="d-flex justify-content-center">
         <a href="deletephoto.php?id=<?php echo $row["g_id"] ;?>">
          <button class="submit btn border" >Delete</button>
      </a>
          </div>

         </div>
</div>

<?php endforeach; ?>
</div>
</div>