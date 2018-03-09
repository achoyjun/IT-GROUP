<?php

include('opener_db.php');

	  $D_id   = $_POST['ID'];
	  $fname  = $_POST['Fname'];
	  $ln     = $_POST['Lname'];
	  $psw    = $_POST['Pword'];

 $sql = mysql_query("INSERT INTO tbadmin(AdminIDNumb, AdFirstName, AdLastName, Password) VALUES 
	   	                 ('$D_id','$fname','$ln','$psw')")
	   						or die(mysql_error());
	    	header('location:AdminLoginPage.php');	  
?>