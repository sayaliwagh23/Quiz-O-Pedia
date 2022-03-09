<?php
require 'connect.php';

if (isset($_POST['studentId'])) {

	$studentId  = $_POST['studentId'];
    $query = "SELECT * FROM `tests` WHERE `id` NOT IN (SELECT DISTINCT `test_id` FROM `student_result` WHERE `student_id`='$studentId')";
  $result = $conn->query($query);
	$data = $result->fetch_all(MYSQLI_ASSOC);
	$myJSON = json_encode($data);
	echo $myJSON;



}
?>