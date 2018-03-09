<?php 
//include('opener_db.php');
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
    <!--link rel="stylesheet" href="Minty/bootstrap.min.css"-->

<?php
  include('showFillUpForm.php');
?>  
  
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
      <div class="jumbotron">
        <h1 class="display-3">Hello! <?php include('modalNameOfStud.php'); ?>
            
          </h1>
        <p class="lead">This is a simple room reservation system, a simple page for reserving a room.</p>
              <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary" href="#" role="button" onclick="showFillUpForm()">Reserve a Room</a>
        </p>
      </div>

          <!--JQ for Auto Fetching-->
           <script type="text/javascript" src="js/JQChat.js"></script>
          <!--Jquery for getting the content of OSA-->
           <script>
             $(document).ready( function()
              {
               setInterval(function() {
                  $('#cardsPopupOSA').load('PopUpRoomResOSA.php');
                },1000);
              });
           </script>
          <!--Jquery for getting the content of PPO-->
           <script>
             $(document).ready( function()
              {
               setInterval(function() {
                  $('#cardsPopupPPO').load('PopUpRoomResPPO.php');
                },1000);
              });
           </script>      

          <!--Jquery for getting the content of Confirmation-->
           <script>
             $(document).ready( function()
              {
               setInterval(function() {
                  $('#cardsPopupCnfrm').load('PopupConfirm.php');
                },1000);
              });
           </script>    
 

        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div  id="cardsPopupOSA"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="bs-component">
              <div  id="cardsPopupPPO"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="bs-component">
              <div  id="cardsPopupCnfrm"></div>
              </div>
            </div>
          </div>
        </div>

      </div>

 <div class="bs-docs-section" style="display: none" id="fillUpForm">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <h2>This is the forms that need to be fill up before reserving a room.</h2>
            </div>
          </div>
        </div>        <hr>
        <div class="row">
          <div class="col-lg-7">
           <!--OSA FOOOOOORM-->
            <form id="frmStudResRoom" name="StudResRoomOSA" action="StudResRoomOSA.php"  method="post">
              <fieldset>
                <legend>Fill up the OSA Form</legend>

                <div class="form-group">
                  <label>Id Number</label>
                  <input type="text" class="form-control" id="txtIDnum" name="IDnum" placeholder="Enter ID Number" value=<?php echo $_SESSION['id']; ?>>
                </div>
   
                <div class="form-group">
                  <label>Date and Time for Reservation</label>
                    <div class="row">
                     <div class="col-lg-5">
                      <div class="bs-component">
                        <input type='date' class="form-control" name="dRes">   
                          <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                          </span> 
                      </div>
                     </div>
                      <div class="col-lg-3">
                        <div class="bs-component">
                           <select class="form-control" id="exampleSelect1" name="hrRes" required>
                            <option class="text-muted">Hour</option>
                           <?php
                            for ($i=1; $i < 13; $i++) 
                            {                               
                              if($i < 10)
                                echo '<option>0'.$i.'</option>';
                              else
                                echo '<option>'.$i.'</option>';
                            }
                           ?>                         
                           </select>  
                        </div>
                      </div>                      
                      <div class="col-lg-2">
                        <div class="bs-component">
                           <select class="form-control" id="exampleSelect1" name="minRes" required>
                            <option class="text-muted">Min</option>                            
                            <?php
                            for ($i=0; $i < 60; $i++) 
                            { 
                              if($i < 10)
                                echo '<option>0'.$i.'</option>';
                              else
                                echo '<option>'.$i.'</option>';
                            }
                           ?>   
                           </select>  
                        </div>
                      </div>                      
                      <div class="col-lg-2">
                        <div class="bs-component" name="tmPeriod">              <!--Period-->
                           <select class="form-control" id="exampleSelect1" name="perRes" required>
                            <option>AM</option>
                            <option>PM</option>
                           </select>  
                        </div>
                      </div>
                    </div>                    
                </div>


                <div class="form-group">
                  <label>Org. Name</label>
                  <input type="text" class="form-control" id="txtOrgName" name="OrgName" placeholder="Name of Organization" required>
                </div>
    
              <div class="form-group">
                <label>Room Name</label>
                 <select class="custom-select" name="rmnm" required>
                  <option selected="">Open this to select Room</option>
                  <option value="MO">MO</option>
                  <option value="HR">HR</option>
                  <option value="RB">RB</option>
                  <option value="LS">LS</option>
                  <option value="PG">PG</option>
                 </select>
              </div>

                 <div class="form-group">
                  <label>Room Number</label>
                  <input type="text" class="form-control" id="txtRmNum" name="RmNum" placeholder="Room Number" required>
                 </div>

                 <div class="form-group">
                  <label for="exampleTextarea">Reason for Reserving</label>
                  <textarea class="form-control" id="txtRFRes" name="ReasfrRes" rows="3" required></textarea>
                 </div>

              </fieldset>

          </div>

          <div class="col-lg-5">

           <!--PPO FOOOOOORM-->
            <!--form id="frmStudResRoom" name="StudResRoomPPO" action="StudResRoomOSA.php" method="post"-->
              <fieldset>
                <legend>Fill up the PPO Form</legend>

                <div class="form-group">
                  <label>Number of Students</label>
                  <input type="text" class="form-control" id="txtNumStud" name="NumStud" placeholder="Enter Number of Students" required>
                </div>
    
                <div class="form-group">
                  <label>Hours of Meeting</label>
                  <input type="text" class="form-control" id="txtHrsMeet" name="HrsMeet" placeholder="Hours of Meeting" required>
                </div>
    
                <div class="form-group">
                  <label>Number of Chairs</label>
                  <input type="text" class="form-control" id="txtNumChairs" name="NumChairs" placeholder="How many chairs to be use?" required>
                </div>

                <div class="form-group">
                  <label>Number of Tables</label>
                  <input type="text" class="form-control" id="txtNumTb" name="NumTb" placeholder="How many tables to be use?" required>
                </div>

                <input type="text" id="txtresID" name="resID">
             <iframe name="submission.frame1" hidden></iframe>
            </form>  

          </div>   
        </div>
          <button type="button" class="btn btn-primary btn-lg btn-block btn-outline-success" onClick="SubmitForms()">Submit</button>
          <button type="reset" class="btn btn-primary btn-lg btn-block btn-outline-secondary">Cancel</button>
      </div>                               




</br>  
</br>  
</br>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../assets/js/bootswatch.js"></script>
  </body>
</html>


<script type="text/javascript">

function SubmitForms() {
  var x = document.getElementById("fillUpForm");

   var d = new Date();
   var yr = d.getFullYear();
   var mo = d.getMonth();     mo = mo + 1;
   var dy = d.getDate();
   var hr = d.getHours();
   var mn = d.getMinutes();
   var sc = d.getSeconds();
   var ms = d.getMilliseconds();
    yr = yr.toString();
    mo = mo.toString();
    dy = dy.toString();
    hr = hr.toString();
    mn = mn.toString();
    ms = ms.toString();
    sc = sc.toString();
   var resID = yr.concat(mo,dy,hr,mn,sc,ms);

   document.getElementById('txtresID').value = resID;

    if (x.style.display === "block")
    {
        x.style.display = "none";
    }
    document.getElementById('frmStudResRoom').submit();
}

</script>>