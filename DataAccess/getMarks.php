<?php
require 'connect.php';
if (isset($_POST['studentId'])) {

    $studentId=$_POST['studentId'];
    $testId=$_POST['testId'];
    $query = "SELECT * FROM `student_result` INNER JOIN`tests` ON `student_result`.`test_id`=`tests`.`id`  Where `student_id`='$studentId' AND `test_id`='$testId' ";
    // echo $query;
    if ($result01 = $conn->query($query)) {
        $obj = array();
        while($row = $result01->fetch_assoc()) {
            array_push($obj,$row);
         }
         $object = json_encode($obj);
         echo $object;
    }
} 
else {
    $error1 = array(
        'error' => array(
            array('error2' => 'No POST'),
        )
    );
    echo json_encode($error1);
}

?>