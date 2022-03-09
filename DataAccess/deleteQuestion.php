<?php
require 'connect.php';
if (isset($_POST['questionId'])) {

    $questionId=$_POST['questionId'];
    // $subject= "sub".rand(10,1000);
    
    //-----------------Delete Subject from Table Subject---------------------
    $sql = "DELETE  From  `test_questions` where id=$questionId ";
        // echo $sql;
        if ($conn->query($sql) === TRUE) {
             echo "<br>test questions deleted".$test_id;
        }

    
else {
        $error1 = array(
            'error' => array(
                array('error2' => 'No POST'),
            )
        );
        echo json_encode($error1);
    }
           
     }    


?>