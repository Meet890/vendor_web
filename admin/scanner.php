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
    <title>Scan</title>
    <style>
        *{
            align-items: center;
            justify-content: center;
        }
        body{
            background-color: #f0f2f5;
        }
        table, td, th{
            border: 4px solid black;
            text-align: center;
            border-collapse: collapse;
        }
        h1{
             /* margin-top: 80px;
             margin-bottom: 20px; */
        }
        .qr{
            height: 384px;
            width: 355px;
        }
    </style>
    </style>
</head>
<body>
    <center>
        <div class="mb-3">
        <h1>Get Membership</h1>
        </div>
<table style="width:750px">
    <div class="container mb-10">
    <div class="row">
        <tr>
            <td>
   
         <h2>Premium Plans</h2>
         <br>
        <div class="col"> <h4>Pay 149 for 1 month.   </h4></div>

        <div class="col"> <h4>  Pay 349 for 3 month</h4></div>
       
        <div class="col"> <h4>Pay 749 for 6 month </h4></div>
        <div class="col"> <h4>  Pay 1499 for 12 month</h4></div>
   
    </td>
    <td>
    
    
            <!-- <div class="col-6 col-lg-4 mx-auto"> -->
                <div class="mt-2 mb-2">

                    <img src="qr.png" alt="qr code" class="qr">
                <!-- </div> -->
  
    </td>
    </tr>
    <tr><td colspan="2">
      
                <form action="scannerphp.php" method="post">
                    <div class="mt-3">
                    <label for="tra-id">Enter Transection id :</label>
                    

                    <input type="number" min="100000000000" max="999999999999" name="tra_id" id="tra_id" class="rounded w-5">
                    <button class=" bg-dark text-white btn" name="submit">Submit</button>
                  
                       <p class="err-msg"> 
                         <?php if($idErr != 1){ echo $idErr ; } ?>
                      </p>
                    
                    </div>
                </form>
               
    </td>
                </div>
            </div>
          
        </div>
    </div>
</body>
</html>