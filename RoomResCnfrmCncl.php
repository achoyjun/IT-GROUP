<?php

include('Conn.php');
 
 //If Osa Button Submitted
    if (isset($_POST['Accept'])) 
    {
    	$id = $_POST['accTBid'];

        $sql = "UPDATE tbroomrespend SET `Status`='Confirmed' WHERE roomresID = '$id'";

        if ($conn->query($sql) === TRUE) {} else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $sql = "UPDATE tbroomresppo  SET `Status`='Waiting' WHERE roomresID = '$id'"; 
            if ($conn->query($sql) === TRUE) 
             {
                header('location:AdminProfile.php');
             } else 
             {
                echo "Error updating record: " . $conn->error;
             }
    } 
     else  if (isset($_POST['Decline'])) 
     {
        $id = $_POST['decTBid'];
        $sql = "UPDATE tbroomrespend SET `Status`='Declined' WHERE roomresID  = '$id'";        
     }

//If PPO Button Submitted
    if (isset($_POST['PPOAccept'])) 
    {
        $id = $_POST['accTBidppo'];

        $sql = "UPDATE tbroomresppo SET `Status` = 'Confirmed' WHERE roomresID = '$id'";
        if ($conn->query($sql) === TRUE) 
        { 
            header('location:PPOProfile.php');
        }
        else 
            echo "Error: " . $sql . "<br>" . $conn->error;

    } 
     else  if (isset($_POST['Decline'])) 
    {
        $id = $_POST['decTBid'];
        $sql = "UPDATE tbroomrespend SET `Status`='Declined' WHERE roomresID  = '$id'";        
    }

include('close.php');
?>