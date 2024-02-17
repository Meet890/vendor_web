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
        <h3>Pay 150 for 1 month.   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Pay 350 for 3 month</h3>
       
        <h3>Pay 750 for 6 month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Pay 1500 for 12 month</h3>
     
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-10 mx-auto">
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
                    <button class=" bg-dark text-white  btn" name="submit">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>