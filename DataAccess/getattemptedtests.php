<?php
require 'connect.php';
if (isset($_POST['studentId'])) {

    
    $studentId=$_POST['studentId'];
   

    $query = "SELECT * FROM `student_result` WHERE `student_id`='$studentId'";
    if ($result01 = $conn->query($query)) {
       
                $attempted=mysqli_num_rows($result01);
                
    $query02 = "SELECT * FROM `tests`";
    if ($result02 = $conn->query($query02)) {
        $totaltests=mysqli_num_rows($result02);

        $obj1 = array(
           
                array('attempted'=>$attempted),
                array('unattempted'=> $totaltests-$attempted)
                    );
        echo json_encode($obj1);

    }


    }
} else {
    $error1 = array(
        'error' => array(
            array('error2' => 'No Post'),
        )
    );
    echo json_encode($error1);
}

?>

