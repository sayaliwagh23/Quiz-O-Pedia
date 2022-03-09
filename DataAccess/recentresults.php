<?php
require 'connect.php';
if (isset($_POST['studentId'])) {

    
    $studentId=$_POST['studentId'];
   

    $query = "SELECT * FROM `student_result` INNER JOIN `tests` ON student_result.test_id=tests.id  INNER JOIN `subjects` ON tests.sub_id=subjects.id WHERE `student_id`='$studentId'";
	$result = $conn->query($query);
	$data = $result->fetch_all(MYSQLI_ASSOC);
	$myJSON = json_encode($data);
	echo $myJSON;




} else {
    $error1 = array(
        'error' => array(
            array('error2' => 'No Post'),
        )
    );
    echo json_encode($error1);
}

?>