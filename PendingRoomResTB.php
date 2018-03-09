<?php
include('Conn.php');
$sql = "SELECT * FROM tbroomrespend WHERE `Status` = 'Pending'";
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
    	  <td>".$row['IDNumb']."</td>
   		  	<td>".$row['RoomName']."</td>
     		<td>".$row['RoomNum']."</td>
    	 <td>".$row['DateRes']."</td>
    	 <td>".$row['Reason']."</td>
    	 <td>".$row['Status']."</td>
    	 <td>
			<button type='submit' class='btn btn-outline-success' name='Accept'>Accept</button> <input type='hidden' value=".$row['roomresID']." name='accTBid'>
			<button type='submit' class='btn btn-outline-danger' name='Decline'>Decline</button> <input type='hidden' value=".$row['roomresID']." name='decTBid'>  
         </td>
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

