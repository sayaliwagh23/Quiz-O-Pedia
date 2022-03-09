<?php
require 'connect.php';
// $obj;
if (isset($_POST['testId'])) {

    $testid = $_POST['testId'];

    $testid = trim($testid, '\'');
    $query = "SELECT * FROM `test_questions` WHERE `test_questions`.`test_id` = $testid ORDER BY `question_no` asc ";

    if ($result01 = $conn->query($query)) {
        $obj = array();
        while($row = $result01->fetch_assoc()) {
            array_push($obj,$row);
         }
         $object = json_encode($obj);
         echo $object;
    }
} else {
    $error1 = array(
        'error' => array(
            array('error2' => 'No GET'),
        )
    );
    echo json_encode($error1);
}