<?php
require 'connect.php';
if (isset($_POST['subjectName'])) {

    $subject=$_POST['subjectName'];
    // $subject= "sub".rand(10,1000);
    
    
    $sql = "INSERT INTO `subjects` (sub_name)
        VALUES ('$subject') ";
        // echo $sql;
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