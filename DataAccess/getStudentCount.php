<?php
require 'connect.php';

    $query = "SELECT * FROM `students` ";

	$result = $conn->query($query);
	$students=mysqli_num_rows($result);
	    $obj1 = array(
           
                array('students'=>$students),
                    );
        echo json_encode($obj1);


?>