<?php

include('scannerphp.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
    <style>
        *{
            align-items: center;
  justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container mb-10">
    <div class="row">
       <center>

        <div class="col"> <h3>Pay 150 for 1 month.   </h3></div>

        <div class="col"> <h3>  Pay 350 for 3 month</h3></div>
       
        <div class="col"> <h3>Pay 750 for 6 month </h3></div>
        <div class="col"> <h3>  Pay 1500 for 12 month</h3></div>
        
        
            <div class="col-6 col-lg-4 mx-auto">
                <div class="card ">
                <div class="w-100 h-auto">
                    <img src="qr.png" alt="qr code" class="img-fluid  rounded">
                </div>
                <form action="scannerphp.php" method="post">
                    <label for="tra-id">Enter Transection id :</label>
                    

                    <input type="number" min="100000000000" max="999999999999" name="tra_id" id="tra_id" class="rounded w-5">
                    <br>
                       <p class="err-msg"> 
                         <?php if($idErr != 1){ echo $idErr ; } ?>
                      </p>
                    <button class=" bg-dark text-white btn" name="submit">Submit</button>
                </form>
                </div>
            </div>
            </center>
        </div>
    </div>
</body>
</html>