<?php
require 'connect.php';
if (isset($_POST['studentId'])) {

    $studentId=$_POST['studentId'];
    $testId=$_POST['testId'];


    $query = "SELECT * FROM `student_test` INNER JOIN `test_questions` 
   Where`test_questions`.`test_id` = `student_test`.test_id
    AND `test_questions`.`question_no` = `student_test`.questionNo
    AND `student_test`.`student_id`='$studentId' 
    AND `test_questions`.test_id='$testId' ORDER BY questionNo ASC";
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