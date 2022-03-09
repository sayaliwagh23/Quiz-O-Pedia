

<?php

//$servername = "185.201.11.128";
//$username = "u939004678_sa";
//$password = "12345";
//$dbo="u939004678_gatetest";
$servername = "localhost";
$username = "root";
$password = "";
$dbo="gatetest";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbo);

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
     echo "Unable to connect to data server right now. Please try again later.";
}else{

     
}

?>
