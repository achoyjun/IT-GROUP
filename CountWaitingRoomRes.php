<?php
include('Conn.php');
$sql = "SELECT * FROM tbroomresppo WHERE `Status` = 'Waiting'";
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