<?php
require 'config.php';
session_start();


 
if(isset($_POST["submit"])){ 
    if(!empty($_FILES["file"]["name"])){ 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath =  $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
		
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $insert = $conn->query("INSERT INTO gallery(g_photo) VALUES ('".$fileName."', NOW())"); 
                if($insert){ 
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
 
// Display status message 



?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<?php
                include 'header.php';
            ?>
			</div>
			<div class="sidebar">
                <?php
                include 'slidebar.php';
                ?>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Add new photo</h4>
                        
						<div class="row">
								<div class="col-12">
									<form action="" method="post" enctype="multipart/form-data">
										Select Image File to Upload:
										<input type="file" name="file">
										<input type="submit" name="submit" value="Upload">
									</form>

								</div>
								<div class="col-12">
								<?php
										

										// Get images from the database
										$query = $conn->query("SELECT * FROM gallery ORDER BY g_uploadtime DESC");

										if($query->num_rows > 0){
										    while($row = $query->fetch_assoc()){
										        $imageURL = 'uploads/'.$row["file_name"];
										?>
										    <img src="<?php echo $imageURL; ?>" alt="" />
										<?php }
										}else{ ?>
										    <p>No image(s) found...</p>
										<?php } ?>
								</div>
						</div>
						
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
	
</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<!-- <script src="assets/js/plugin/chartist/chartist.min.js"></script> -->
<!-- <script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script> -->
<!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<!-- <script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script> -->
<!-- <script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script> -->
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<!-- <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script> -->
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>