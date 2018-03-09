<?php
session_start();
 include('Conn.php');

if (isset($_POST['prntResBtn'])) 
{
 	$resID = $_POST['cnfrmresID'];

 	$sql = "SELECT * FROM tbroomrespend WHERE `roomresID` = '$resID'" ;
 	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
      while($row = $result->fetch_assoc()) 
      {
    	//Get this information for transfering of date		
      	$dateres = $row['DateTimeRes']; // Date for Reservation
      	$_SESSION['reservedby'] = $row['IDNumb']; 
      	$_SESSION['reason'] = $row['Reason']; 
      	//Get this data for using later for printing
      	$_SESSION['orgnm'] = $row['OrgName'];
      	$_SESSION['rmnam'] = $row['RoomName']; 
      	$_SESSION['rmnum'] = $row['RoomNum']; 
      	$_SESSION['dres'] = $row['DateRes'];   //Date Reserved  
        
  $sql = "INSERT INTO tbroomres(roomresID, dateres, reservedby, reason, status) VALUES ('$resID','$dateres','$reservedby', '$reason', 'Unused')"; 
  
  if ($conn->query($sql) === TRUE) 
    echo "New record created successfully";
   else 
    echo "Error: " . $sql . "<br>" . $conn->error;

  //session_start();//para mag start ang session
  //$_SESSION['resID'] = $reservedby;
    $_SESSION['cnfrmidprint'] = $_SESSION['reservationID'];
  unset($_SESSION['reservationID']);
      }      
  }
 }
 include('close.php');
?>

