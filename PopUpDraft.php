<?php
session_start();
if (!isset($_SESSION['resID']))
{
 
}
else if(isset($_SESSION['resID']))
{
    $resID = $_SESSION['resID'];


}
include('close.php');
?>



<?php
include('Conn.php');
$ppo = "SELECT * FROM tbroomresppo";

$result1 = $conn->query($ppo);

if ($result1->num_rows > 0) 
{

      while($ppo = $result1->fetch_assoc()) 
      {
        if ($ppo['Status'] == 'Pending')
        {
         echo'
            <div class="card border-danger mb-3" style="max-width: 20rem;">
            <div class="card-header ">Final Confirmation</div>
            <div class="card-body">
            <h4 class="card-title">OSA and PPO</h4>
            <p class="card-text">A Confirmation from the Office and Student Affairs and Physical Plant Office is needed</p>
            </div></div>
         ';
        }        
        else if ($ppo['Status'] == 'Waiting')
        {
         echo'
            <div class="card border-danger mb-3" style="max-width: 20rem;">
            <div class="card-header ">Final Confirmation</div>
            <div class="card-body">
            <h4 class="card-title">PPO</h4>
            <p class="card-text">The OSA has confirmed your reservation. Wait for the PPO.</p>
            </div></div>
         ';
        }
        else
        {
         echo'
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header ">Reservation Confirmed</div>
            <div class="card-body">
            <h4 class="card-title">OSA and PPO</h4>
            <p class="card-text">The Office of Student Affairs and Physical Plant Office has confirmed your reservation.</p>
              <button type="button" class="btn btn-warning">Print Reservation</button>
            </div></div>
         ';          
        }
      }  
}

include('close.php');
?> 


<!--div class="card border-danger mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Danger card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div


            <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
            <div class="card-header ">Confirmed</div>
            <div class="card-body">
            <h4 class="card-title">PPO</h4>
            <p class="card-text">Your requested '.$row['numChairs'].' and '.$row['numTables'].' has been confirmed by the PPO.</p>
            </div></div>

-->











<?php
session_start();
if (!isset($_SESSION['resID'])){}
else if(isset($_SESSION['resID']))
{
  include('Conn.php');
 $sql = "SELECT * FROM tbroomrespend";
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
?>




-------------------------
 include('Conn.php');
 $sql = "SELECT * FROM tbroomrespend";
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

    include('close.php');
 }