<?php

// First try to connect to the live server
$live_dbhost = 'sql105.infinityfree.com';
$live_dbuser = 'if0_38777883';
$live_dbpass = 'Meetrn7890';
$live_dbname = 'if0_38777883_vendor';

try {
    $conn = @mysqli_connect($live_dbhost, $live_dbuser, $live_dbpass, $live_dbname);
} catch (Exception $e) {
    // If live connection fails, try localhost (development)
if (1 == 1) {
    $local_dbhost = 'localhost';
    $local_dbuser = 'root';
    $local_dbpass = '';
    $local_dbname = 'vendor';

    $conn = mysqli_connect($local_dbhost, $local_dbuser, $local_dbpass, $local_dbname);

    if (!$conn) {
        die("ERROR: Could not connect to either server. " . mysqli_connect_error());
    } else {
        // echo "Connected to local database.";
    }
} else {
    // echo "Connected to live database.";
}
}



?>
