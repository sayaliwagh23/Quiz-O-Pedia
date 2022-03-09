<?php
require 'connect.php';

if (isset($_POST['emailId'])) {
    //get name email mob and password and address
     $emailId       =$_POST['emailId'];
     $password      =$_POST['password'];
     $fullName      =$_POST['fullName'];
     $collegeName   =$_POST['collegeName']; 
     $Branch        =$_POST['Branch'];
     $dob           =$_POST['dob'];
     $gender        =$_POST['gender'];
       
    //check if the mobile exist in db
    $query = "SELECT * FROM `students` WHERE `emailId`='$emailId'";
    if ($result01 = $conn->query($query)) {
        while ($row = $result01->fetch_assoc()) {
            echo "Email Id already registered with us";
        }
    }
    if ($result01->num_rows < 1) {

        $sql = "INSERT INTO `students` ( `emailId`, `password`, `fullName`, `collegeName`, `Branch`, `dob`, `gender`) 
        VALUES ('$emailId', '$password', '$fullName', '$collegeName', '$Branch', '$dob', '$gender')";

        if ($conn->query($sql) === TRUE) {
            //Send data
            echo json_encode(array("emailId"=>$emailId,"password"=>$password,"fullName"=>$fullName));
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "Failed no post";
}
