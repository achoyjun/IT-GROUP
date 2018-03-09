<?php
session_start();
if (!isset($_SESSION['reservationID']))
{
 
}
else if(isset($_SESSION['reservationID']))
{
    $resID = $_SESSION['reservationID'];

 include('Conn.php');
  $sql = "SELECT * FROM tbroomresppo WHERE `roomresID` = $resID";
   $result = $conn->query($sql);

 if ($result->num_rows > 0) 
    {
     // output data of each row

     while($row = $result->fetch_assoc()) 
     {        
        if($row['Status'] == 'Pending')
        {
         echo'
            <div class="card border-danger mb-3" style="max-width: 20rem;">
                <div class="card-header ">Pending</div>
            <div class="card-body">
            <h4 class="card-title">Physical Plant Office</h4>
            <p class="card-text">You need to wait for the confirmation of OSA before your requested '.$row['numChairs'].' chairs and '.$row['numTables'].' tables with '.$row['hrsMeeting'].' hrs of meeting will be send at PPO</p>
            </div></div>
         ';
        }
         else if($row['Status'] == 'Waiting')
         {
          echo'
            <div class="card border-danger mb-3" style="max-width: 20rem;">
            <div class="card-header ">Needs Confirmation</div>
            <div class="card-body">
            <h4 class="card-title">PPO</h4>
            <p class="card-text">The items you requested for reservation waits for a confirmation</p>
            </div></div>
          ';
         }
         else if($row['Status'] == 'Confirmed')
         {
          echo'

            <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
            <div class="card-header ">Confirmed</div>
            <div class="card-body">
            <h4 class="card-title">PPO</h4>
            <p class="card-text">Your requested '.$row['numChairs'].' and '.$row['numTables'].' has been confirmed by the PPO.</p>
            </div></div>
          ';
         }
     }
}   
include('close.php');
}
?>
