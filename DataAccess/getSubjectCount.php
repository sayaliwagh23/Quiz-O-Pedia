<?php
require 'connect.php';

    $query = "SELECT * FROM `subjects` ";

	$result = $conn->query($query);
	$subjects=mysqli_num_rows($result);
	    $obj1 = array(
           
                array('subjects'=>$subjects),
                    );
        echo json_encode($obj1);


?>