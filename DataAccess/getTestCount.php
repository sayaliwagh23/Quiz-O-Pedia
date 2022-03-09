<?php
require 'connect.php';

    $query = "SELECT * FROM `tests` ";

	$result = $conn->query($query);
	$tests=mysqli_num_rows($result);
	    $obj1 = array(
           
                array('tests'=>$tests),
                    );
        echo json_encode($obj1);


?>