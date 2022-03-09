<?php
require 'connect.php';
if (isset($_POST['subjectId'])) {

    $subjectId=$_POST['subjectId'];
    // $subject= "sub".rand(10,1000);
    
    //-----------------Delete Subject from Table Subject---------------------
    $sql = "DELETE  From  `subjects` where id=$subjectId ";
        // echo $sql;
        if ($conn->query($sql) === TRUE) {
            
            // echo $subjectId;
        }
//-------------------POST the id of tests from test table where subject id is of deleted subject
        $query = "SELECT `id` FROM `tests` Where sub_id=$subjectId";
        if ($result01 = $conn->query($query)) {
            $obj=array();
            while($row = $result01->fetch_assoc()) {
               array_push($obj,$row);
                $test_id=$row['id'];
                //-----------------delete the test where test id is-------------------------
            $sql01 = "DELETE  From  `tests` where `id`='$test_id' ";
        // echo $sql;
        if ($conn->query($sql01) === TRUE) {
            
            // echo "<br>test Deteted".$test_id;
        }

        //-------------------delete from test_questions where test is is of subject---------------------------
        $sql = "DELETE  From  `test_questions` where `test_id`='$test_id'";
        // echo $sql;
        if ($conn->query($sql) === TRUE) {

             echo "<br>test questions deleted".$test_id;
        }

            }
           
               
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