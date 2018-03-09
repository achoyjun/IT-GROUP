<?php
include('Conn.php');
$sql = "SELECT * FROM tbroomrespend WHERE `Status` = 'Pending'";
$result = $conn->query($sql);

$cntr = 0;
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) 
    {
    	$cntr++;
    }

    	echo $cntr;
}

include('close.php');
?>