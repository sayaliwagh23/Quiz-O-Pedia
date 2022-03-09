<?php
require 'connect.php';
$i=0;
$corectAnswersCount=0;
$studentMarks=0;
$testid=0;
$studentId=0;
if (isset($_POST['test'])) {
     $arr01 = $_POST['test'];
   // $arr=json_decode('[{"id":"1","test_id":"1","question_no":"1","question_type":"1","question_text":"what is OOPS?","question_image":null,"option_a":"Object Original Planning","option_b":"Original Object Plan","option_c":"Object Oriented Programming","option_d":"Object Organized Programming","correct_answer":"c","timestamp":"2020-03-01 17:14:30","answer":null,"studentId":"1"},{"id":"2","test_id":"1","question_no":"2","question_type":"1","question_text":"What is JSON","question_image":null,"option_a":"Java server object notation","option_b":"JavaScript object Notation","option_c":"Java server operation notation ","option_d":"Java server object notice","correct_answer":"a","timestamp":"2020-03-10 09:35:43","answer":null,"studentId":"1"}]',true);
     
    // echo $arr[0]['question_text'];
   // $arr=json_decode($arr01,true);

    foreach($arr01 as $item) { //foreach element in $arr
	//echo 'here';
        $testid=$item['test_id'];
        $questionNo=$item['question_no'];
        $answer=$item['answer'];
        if($answer=="" OR $answer==null)
        {
            $answer='null';
        }
        $studentId=$item['studentId'];
        // --------Check if answer is correct---------
         if($item['correct_answer']==$item['answer']){
         $corectAnswersCount++;
        //  echo $corectAnswersCount;
        }
        // ------------------
        
        $sql = "INSERT INTO `student_test` (`test_id`, `questionNo`, `answer`, `student_id`)
        VALUES ($testid,$questionNo,'".$answer."',$studentId) ";
     if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
	$i++;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
	echo $i;
// -------------POST students marks for each question-------
    $query02 = "SELECT * FROM `tests` Where tests.id='$testid' ";
    if ($result02 = $conn->query($query02)) {
        $row02=$result02->fetch_assoc();
        if($i != 0){
            $studentMarks=($row02['test_marks']/$i)*$corectAnswersCount;
        }    
        $subjectId=$row02['sub_id'];
        }
// -----------------------------------
// -----------insert total result into student result------------
$sql02 = "INSERT INTO `student_result`(`test_id`, `student_marks`,  `student_id`)
 VALUES ($testid, $studentMarks,$studentId) ";
 //echo $sql02;
if ($conn->query($sql02) === TRUE) {
    $success=true;
   

} 
 echo 'here';
// ----------------------------
}
else{

  $error1 = array(
        'error' => array(
            array('error2' => 'No POST'),
        )
    );
    echo json_encode($error1);
}
    // $obj = json_decode($jsonobj);

    // foreach($obj as $key => $value) {
    //   echo $key . " => " . $value . "<br>";
    // }
    $conn->close();