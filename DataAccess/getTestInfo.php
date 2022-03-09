<?php
require 'connect.php';

if (isset($_POST['testId'])) {
 $testId = $_POST['testId'];
   
    $query = "SELECT * FROM `tests` INNER JOIN `subjects` ON `tests`.`sub_id`=`subjects`.`id` WHERE  `tests`.`id`=$testId";
    $result = $conn->query($query);
	$data = $result->fetch_all(MYSQLI_ASSOC);
	$myJSON = json_encode($data);
	echo $myJSON;
	}

?>