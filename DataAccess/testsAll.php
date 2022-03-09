<?php
require 'connect.php';


    $query = "SELECT * FROM `tests`";
  $result = $conn->query($query);
	$data = $result->fetch_all(MYSQLI_ASSOC);
	$myJSON = json_encode($data);
	echo $myJSON;
?>