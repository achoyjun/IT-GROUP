<?php
session_start();
if (!isset($_SESSION['reservationID'])){}
else if(isset($_SESSION['reservationID']))
{

   $resID = $_SESSION['reservationID'];
  include('Conn.php'); 
 $sql = "SELECT * FROM tbroomrespend WHERE `roomresID` = $resID ";
 $result = $conn->query($sql);

if ($conn->query($sql) == TRUE) {  
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 if ($result->num_rows > 0) 
  {
    // output data of each row

   while($row = $result->fetch_assoc()) 
    {
    if ($row > 0)    
     {
        if($row['Status'] == 'Pending')
        {
         echo'
            <div class="card border-danger mb-3" style="max-width: 20rem;">
            <div class="card-header ">Pending</div>
            <div class="card-body">
            <h4 class="card-title">Office of Student Affairs</h4>
            <p class="card-text">Your reservation for room '.$row['RoomName'].' '.$row['RoomNum'].' at '.$row['DateTimeRes'].' waits for a confirmation</p>
            </div></div>
         ';
        }
        else if($row['Status'] == 'Confirmed')
        {
         echo'
            <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
            <div class="card-header ">Confirmed</div>
            <div class="card-body">
            <h4 class="card-title">Office of Student Affairs</h4>
            <p class="card-text">Your reservation for room '.$row['RoomName'].' '.$row['RoomNum'].' at '.$row['DateTimeRes'].' has been confirmed and waits for the confirmation of PPO.</p>
            </div></div>
         ';
        }
     } 
      
    }
  }
include('close.php');
}
?>
