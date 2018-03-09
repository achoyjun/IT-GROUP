

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

        <div class="row">
          <div class="col-lg-12">
            <h2 id="type-blockquotes"></h2>
          </div>
        </div>
        <div class="row">
         <div class="jumbotron">
          <h1 class="display-3">Hello, 

<?php
session_start();
include("Conn.php");
  $resID = $_SESSION['id'];
  $printID = $_SESSION['cnfrmidprint'];
$sql = "SELECT `FirstName`,`LastName` FROM tbstud WHERE `IDNumb` = $resID ";
    $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
      while($row = $result->fetch_assoc()) 
        echo $row["FirstName"].' '.$row["LastName"]; 
  }   

?>

          </h1>
            <p class="lead">We are here to inform you that your reservation has been approved</p>
            <hr class="my-4">
              <p>Your resevation at <?php echo $_SESSION['rmnam'].' '.$_SESSION['rmnum'].' at the date and time of '.$_SESSION['dres'].' for the reason of'.$_SESSION['reason'].' of ' . $_SESSION['orgnm'].'' ; ?></p>
          </div>
        </div>
      </div>

       <br> 

              </div>
              </div>
            
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/popper.min.js"></script>
    <script src="vendor/bootstrap.min.js"></script>
  </body>
</html>
<?php 
include("close.php"); ?>