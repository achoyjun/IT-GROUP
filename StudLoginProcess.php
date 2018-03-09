<html>
<body >
<?php
 include('opener_db.php');//para sa connection sang database

if (isset($_POST['LoginSubmit'])) //condition kun e click ang button
  {   
     $IDNum=$_POST['IDNumSt'];//variable ang $Username kag ang $_POST['UserName'] ay value sang textbox nga UserName
    
     													
     												//Username and password is Cell name in Database Table
     $result = "SELECT * from tbstud where IDNumb = '$IDNum'"; //query sang database
     	$result = $connector->query($result); 
		
		$count=mysql_num_rows($result);//isipon kn may tyakto sa query
		$row=mysql_fetch_array($result);//ma return row sa database
		
		if ($count > 0)//kun may tyakto sa query e execute yah ang code sa dalom
		{	 session_start();//para mag start ang session
			 $_SESSION['id'] = $row['IDNumb'];//kwaon ang id sang may tyakto nga username kag password ang ibotang sa $_SESSION['member_id']
			 header('location:StudRes.php');
		}
		 else
	    {
				header('location:index-error.php');
		}
  }
  close();
?>
</body>
</html>
