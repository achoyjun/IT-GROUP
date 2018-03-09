<?php
include('Conn.php');
$sql = "SELECT * FROM tbroomresppo WHERE `Status` = 'Waiting'";
$result = $conn->query($sql);

 $cnt = 1;
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) 
    {
        echo "
       <form method='post' action='RoomResCnfrmCncl.php'> 
    	<tr class='table-secondary'>
    	  <th scope='row' name='tbID'>".$cnt."</th>
    	  <td>".$row['numStud']."</td>
   		  	<td>".$row['hrsMeeting']."</td>
     		<td>".$row['numChairs']."</td>
    	 <td>".$row['numTables']."</td>
    	 <td>".$row['Status']."</td>
    	 <td>
			<button type='submit' class='btn btn-outline-success' name='PPOAccept'>Accept</button> <input type='hidden' value=".$row['roomresID']." name='accTBidppo'>
			<button type='submit' class='btn btn-outline-danger' name='PPODecline'>Decline</button> <input type='hidden' value=".$row['roomresID']." name='decTBidppo'>  </td>
    	</tr>
       </form>	
        ";
         $cnt++;
    }
} else {


echo'0 results';
        echo "
       <form method='post' action='RoomResCnfrmCncl.php'> 
    	<tr class='table-secondary'>
    	  <th scope='row'></th>
    	  <td></td>
   		  	<td></td>
     		<td></td>
    	 <td></td>
    	 <td></td>
    	 <td></td>
    	 <td>
 </td>
    	</tr>
        ";
    }

include('close.php');
?>

