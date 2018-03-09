<?php

include('Conn.php');

	  $resID 	 = $_POST['resID']; 	//date("Ymdhis");
	  $dRes      = $_POST['dRes'];	
	  $hrRes     = $_POST['hrRes'];	
	  $minRes    = $_POST['minRes'];	
	  $perRes    = $_POST['perRes'];	
	  $dtRes     = $dRes .' - '. $hrRes.':'. $minRes.' '. $perRes;
	  $StudID    = $_POST['IDnum'];
	  $OrgName   = $_POST['OrgName'];
	  $rmnm      = $_POST['rmnm'];
	  $RmNum     = $_POST['RmNum'];
	  $ReasfrRes = $_POST['ReasfrRes'];
	  $DateRes   = date("Y-m-d");
	  $Status	 = 'Pending'; 


$sql = "INSERT INTO tbroomrespend (roomresID, DateTimeRes,IDNumb, OrgName, RoomName, RoomNum, DateRes, Reason ,Status)
VALUES  	('$resID','$dtRes','$StudID','$OrgName','$rmnm','$RmNum','$DateRes','$ReasfrRes','$Status')";

if ($conn->query($sql) === TRUE) {	
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
	  $numStud    = $_POST['NumStud'];
	  $HrsMeet   = $_POST['HrsMeet'];
	  $NumChairs = $_POST['NumChairs'];
	  $NumTb     = $_POST['NumTb'];

$sql = "INSERT INTO tbroomresppo (roomresID, numStud, hrsMeeting, numChairs, numTables, Status)
VALUES  ('$resID','$numStud','$HrsMeet','$NumChairs','$NumTb', 'Pending')";


if ($conn->query($sql) === TRUE) {	
	session_start();//para mag start ang session
	$_SESSION['reservationID'] = $resID;
 	//header("location:PopUpRoomResOSA.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
				   	  
	    	include('close.php');
?>