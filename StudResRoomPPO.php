<?php

include('Conn.php');
	
	  $resID 	 = date("Ymdhis");
	  $numStud    = $_POST['NumStud'];
	  $HrsMeet   = $_POST['HrsMeet'];
	  $NumChairs = $_POST['NumChairs'];
	  $NumTb     = $_POST['NumTb'];

$sql = "INSERT INTO tbroomresppo (roomresID, numStud, hrsMeeting, numChairs, numTables, Status)
VALUES  ('$resID','numStud','$HrsMeet','$NumChairs','$NumTb', 'Pending')";

if ($conn->query($sql) === TRUE) {	

   header('location:StudResRoomOSA.php');	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
				   	  
	    	include('close.php');
?>