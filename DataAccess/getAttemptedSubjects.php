<?php
require 'connect.php';

if (isset($_POST['studentId'])) {

    $studentId=$_POST['studentId'];
    $query = "SELECT * FROM subjects WHERE id IN (SELECT sub_id	 from tests WHERE id IN (select test_id from student_result WHERE student_id=$studentId)) ";
    $result = $conn->query($query);
	$data = $result->fetch_all(MYSQLI_ASSOC);
	$myJSON = json_encode($data);
	echo $myJSON;
}

?>