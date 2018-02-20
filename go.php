<?php include('connection.php') ?>
<?php
    if (isset($_POST['loginbutton']))
        {     
    session_start();
				$servername = "localhost";
				$username = "id3114429_xethxavier213";
				$password = "babyshet96";
				$dbname = "id3114429_denr";
				// Create connection
				$conn = new mysqli($servername, $username, $password,$dbname);
    
				$username = ($_POST['username']);
				$password = ($_POST['password']);
				
				$sql = "SELECT username, password, name from accounts WHERE username='$username' and password='$password'";
				$result = $conn->query($sql);

				if ($result->num_rows != 0) {
					header("Location: dashboard.php");
					while($row = mysqli_fetch_assoc($result)) {
						$_SESSION['login_user'] = $row['name'];
						$_name = $row['username'];
 $_user = $_SESSION['login_user'];
 $sql = "INSERT INTO actions(tablename,dataname,user,actiondate,action) VALUES('Login','$_name', '$_user', CURRENT_TIMESTAMP, 'Login')"; 
 mysqli_query($connect, $sql) ;						
						}
				
				} 
				else 
				{
					echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
				}	
				
    }
    ?>