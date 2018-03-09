<?php

include('Conn.php');
 $id = $_SESSION['id'];

$sql = "SELECT * FROM tbstud WHERE `IDNumb` = $id ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo $row['FirstName'].' '.$row['LastName'];
	}
}
include('close.php');

?>