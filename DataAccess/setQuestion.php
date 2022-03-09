<?php
require 'connect.php';
if (isset($_POST['testId'])) {

    $testId=$_POST['testId'];
	$questionNo=$_POST['questionNo'];
	$questionText=$_POST['questionText'];
	$option1=$_POST['option1'];
	$option2=$_POST['option2'];
	$option3=$_POST['option3'];
	$option4=$_POST['option4'];
	$correctAnswer=$_POST['correctAnswer'];
	
    $testId=trim($testId,"\'");
    $questionText=trim($questionText,"\'");
    $questionNo=trim($questionNo,"\'");
    $option1=trim($option1,"\'");
    $option2=trim($option2,"\'");
    $option3=trim($option3,"\'");
    $option4=trim($option4,"\'");
    $correctAnswer=trim($correctAnswer,"\'");
    
    $sql = "INSERT INTO `test_questions` (`test_id`, `question_no`, `question_text`,`option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`)
    VALUES ($testId,$questionNo,'$questionText','$option1','$option2','$option3','$option4','$correctAnswer')";
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            
            echo $subject;
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