<?php

include('opener_db.php');

	  $St_id   = $_POST['ID'];
	  $fname  = $_POST['Fname'];
	  $ln     = $_POST['Lname'];

 $sql = mysql_query("INSERT INTO tbStud(IDNumb, FirstName, LastName) VALUES 
	   	                 ('$St_id','$fname','$ln')")
	   						or die(mysql_error());
	    	header('location:StudRes.php');	  
?>