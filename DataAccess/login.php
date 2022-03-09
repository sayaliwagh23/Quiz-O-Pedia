<?php
require 'connect.php';
if (isset($_POST['emailId'])) {

    $userName =$_POST['emailId'];
    $password =$_POST['password'];

    $query = "SELECT  `id`, `emailId`, `password`, `fullName` FROM `students` WHERE emailId = '$userName' and password= '$password' ";
    if ($result01 = $conn->query($query)) {
        while ($row = $result01->fetch_assoc()) {
           
           
            if (strcmp($userName,$row["emailId"])==0 and $password == $row["password"]) {
                $object = json_encode($row);
                echo $object;
            } else {

                $error1 = array(
                    'error' => array(
                        array('error1' => 'Failed'),

                    )
                );
                echo json_encode($error1);
            }
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