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

     while($sql = $result->fetch_assoc()) 
      {
        if ($sql['Status'] == 'Pending')
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
        else if ($sql['Status'] == 'Waiting')
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
            <form id="frmConfirmPrint" method="post" action="ConfirmReservationtoPrint.php" target="submission.frame"> 
              <button type="submit" class="btn btn-warning" onclick="PrintRes()" name="prntResBtn">Print Reservation</button>   
                <input type="hidden" value="'.$resID.'" name="cnfrmresID" >
              <iframe name="submission.frame" hidden></iframe>
            </form>    
<script>
function PrintRes() 
{
    var myWindow = window.open("ReservationPrint.php", "", "width=1000,height=1000");
}
</script>


            </div></div>
         ';          
        }
      }  
      }
include('close.php');
}
?>




