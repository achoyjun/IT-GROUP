<?php 
//include('Conn.php');
session_start();
if (!isset($_SESSION['id']))
{
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Minty/bootstrap.css" media="screen">
    <link rel="stylesheet" href="Minty/bootstrap.min.css">
  
	
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->

  </head>


  <body>

    <script src="../assets/js/bsa.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">NDDU : Room Reservation System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	


	<div class="container">

      <div class="page-header" id="banner">
        <div class="row">
        
      </div>
    </div>
    
          <div class="col-lg-12">

            <div class="bs-example">
              
                <!-- style-->

                <style type="text/css">

                .cust-btn {

                   width:100%;
                }

                .cust-form {

                   width:100%;
                }
                </style>
                <!--start-->

					<br>

  <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Room Reservation : Waiting for Confirmation <span id="WRRTB" class="badge badge-danger badge-pill"></span></h1>
            </div>

          <!--JQ for Auto Fetching-->
           <script type="text/javascript" src="js/JQChat.js"></script>
          <!--Jquery for getting the content of messages from the link-->
           <script>
             $(document).ready( function()
              {
               setInterval(function() {
                  $('#WRRTB').load('CountWaitingRoomRes.php');
                },1000);
              });
           </script>

            <div class="bs-component">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Number of Students</th>
                    <th scope="col">Hours of Meeting</th>
                    <th scope="col">Number of Chairs</th>
                    <th scope="col">Number of Tables</th>
                    <th scope="col">Status</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>

<?php

include('WaitingRoomResTB.php');

?>
 
                </tbody>
              </table> 
            </div><!-- /example -->
          </div>
        </div>
      </div>
      </div>

       <br> 


       <!--Button for Submitting the Form-->  
                
              </div>
              </div>
            
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../assets/js/bootswatch.js"></script>
  </body>
</html>
