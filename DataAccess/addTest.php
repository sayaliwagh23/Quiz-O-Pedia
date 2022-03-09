<?php
require 'connect.php';
if (isset($_POST['testName'])&&$_POST['subjectId']) {

    $testName=$_POST['testName'];
    $subjectId=$_POST['subjectId'];
    $testInfo=$_POST['testInfo'];
    $testMarks=$_POST['testMarks'];
    $totalTime=$_POST['totalTime'];
    $testName=trim($testName,"\'");
    $subjectId=trim($subjectId,"\'");
    $testInfo=trim($testInfo,"\'");
    $testMarks=trim($testMarks,"\'");
    $totalTime=trim($totalTime,"\'");
    
    $sql = "INSERT INTO `tests`( `test_name`, `sub_id`, `info`,`test_marks`,`test_total_time`) 
    VALUES ('$testName','$subjectId','$testInfo','$testMarks','$totalTime')";
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            
            // echo $subject;
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