<?php
require 'connect.php';


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from `students` ";
$result = $conn->query($sql);

$data = $result->fetch_all(MYSQLI_ASSOC);
$myJSON = json_encode($data);
echo $myJSON;


 ?>
