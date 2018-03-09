<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Minty/bootstrap.css" media="screen">
    <link rel="stylesheet" href="Minty/bootstrap.min.css">
 
	
<!--JavaScript For Login-->
	<script language="JavaScript" src="js/Login.js"></script>
<!--For Clear Textbox-->
	<script language="JavaScript" src="js/ClearText.js"></script>	
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
    <script src="../assets/js/bsa.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">NDDU : Room Reservation System</a>
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

        <div class="row">
          <div class="col-lg-12">
            <h2 id="type-blockquotes"></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="bs-component">
              <blockquote class="blockquote">
                <img src="images/classroom.png" height="300" width="300">
                <footer class="blockquote-footer">A System that can monitor and ask for reserving a student a room.</footer>
              </blockquote>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="bs-component">
              <blockquote class="blockquote">
                <img src="images/classroom.png" height="300" width="300">
                <footer class="blockquote-footer">A System that can monitor and ask for reserving a student a room.</footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>


<!--This is for Alert if Login is Failed-->
                      <!--Division for Alert if no Username in Users Input-->     
        <div class="col-lg-3" style="visibility:hidden;" id="UnReq" name="AlertFailLogin">
          <div class="bs-component" style="margin-left:15px;margin-top:10px;">
            <span class="label label-warning">Username Required</span>
          </div>  
        </div> 

       <!--Start of Form-->
       <!--Start of Form-->
          <div class="list-group">  
            <form method="post" action="StudLoginProcess.php">  
              <div class="form-group">
                <div class="col-lg-12"><br>
                  <input type="text" class="form-control text-center" id="txtIDNumSt" name="IDNumSt" placeholder="ID Number" required><br>
  
                    <!--Button for Submit the form-->
                    <input type="submit" name="LoginSubmit" id="btnSub" class="btn btn-info btn-block" value="Login"><br> 
                     
     <!--Button-->   
                <a href="SignUpFormStud.php" class="btn btn-success btn-lg btn-block btn-xs" value="SignUp for Admin">Sign-Up for Student</a>
                  <br>

                  <br> 
                </div>
              </div>
            </form>

       <!--Button for Submitting the Form-->  
  
               <!--Division for alert if email and password does not exist--> 
        <div class="col-lg-4" style="margin-top:10px">
         <div class="bs-component"> 
          <div class="alert alert-dismissable alert-danger">
               <strong>No ID Number Found</strong>. <a href="SignUpFormStud.php"><i>Sign Up?</i></a>
              </div>
         </div>
        </div>    

              </div>
                 <br> 
              </div>
              </div>
  
            
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../assets/js/bootswatch.js"></script>
  </body>
</html>
