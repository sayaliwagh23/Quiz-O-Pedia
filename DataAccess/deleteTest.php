<?php
require 'connect.php';
if (isset($_POST['testId'])) {

    $test_id=$_POST['testId'];
    // $subject= "sub".rand(10,1000);
    
    //-----------------delete the test where test id is-------------------------
    $sql01 = "DELETE  From  `tests` where `id`='$test_id' ";
    // echo $sql;
    if ($conn->query($sql01) === TRUE) {
        
        // echo "<br>test Deteted".$test_id;
    }
    $sql = "DELETE  From  `test_questions` where `test_id`='$test_id'";
    // echo $sql;
    if ($conn->query($sql) === TRUE) {

        echo "<br>test questions deleted".$test_id;
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