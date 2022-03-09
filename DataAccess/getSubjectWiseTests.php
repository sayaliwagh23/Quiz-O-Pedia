<?php
require 'connect.php';

if (isset($_POST['subjectId'])&&isset($_POST['studentId'])) {

    $subjectId=$_POST['subjectId'];
    $studentId=$_POST['studentId'];
    $query = "SELECT * from tests WHERE id IN (SELECT test_id from student_result WHERE test_id IN (SELECT id from tests WHERE sub_id=$subjectId))";
    $result = $conn->query($query);
	$data = $result->fetch_all(MYSQLI_ASSOC);
	$myJSON = json_encode($data);
	echo $myJSON;
}

?>