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
    <div class="container-fluid ">
        <div class="row">
            <div class="col-4 mx-auto">
                <div class="card ">
                <div class="w-100 h-auto">
                    <img src="qr.png" alt="qr code" class="img-fluid  rounded">
                </div>
                <form action="scannerphp.php" method="post">
                    <label for="tra-id">Enter Transection id :</label>
                    

                    <input type="number" min="100000000000" max="999999999999" name="tra_id" id="tra_id" class="rounded ">
                    <br>
                
                    <button class=" bg-dark text-white  btn">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>