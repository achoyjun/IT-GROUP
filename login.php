<?php include('go.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/denr.ico" type="image/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/backtotop.js"></script>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<a href="http://r12.denr.gov.ph/">
						<img src="images/logo.jpeg" class="desc animate-box" width="200" height="200" border="10" style="padding-top: 20px;">
						</a>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active"><a href="index.php">Home</a></li>
								<li>
									<a href="#" class="fh5co-sub-ddown">About Us</a>
									<ul class="fh5co-sub-menu">
										<li><a href="history.php">Our History</a></li>
										<li><a href="organization.php">Our Organization</a></li>
										<li><a href="directory.php">Directory</a></li>
										<li><a href="profile.php">Regional Profile</a></li>
										<li><a href="vmm.php">Mandate/Vision/Mission</a></li>
										<li><a href="region12.php">Region 12</a></li>
									</ul>
								</li>
								<li><a href="projects.php">Programs & Projects</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/b10.jpg);">
				<div class="desc animate-box" style="top: calc(50% - 125px);">
					<h2>Login</h2>
					<span>Department of Environment and Natural Resources</span>
				</div>
				
				<div class="desc animate-box">
				<div class="loginbody"></div>
				<div class="grad"></div>
				<div class="header">
				</div>
				<br>
				<form method="post" action="login.php">
				<div class="login"  style="padding-left:30px">
				<input type="text" placeholder="username" name="username" required /><br>
				<input type="password" placeholder="password" name="password" required /><br>
				<button type="submit" name="loginbutton" value="loginbutton" id="loginbutton">Login</button>
				</div>
			
				</form>
			
				</div>
				
			</div>
		</div>
		<!-- end:header-top -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="https://twitter.com/DENR_Official"><i class="icon-twitter2"></i></a>
								<a href="https://www.facebook.com/pages/Department-of-Environment-and-Natural-Resources-DENR/262766670507636"><i class="icon-facebook2"></i></a>
								<a href="https://www.youtube.com/channel/UClEdMkTnpbKA4aHqepPlj1Q"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright © 2017 SOCCSKSARGEN. All Rights Reserved.</p>
							<p>REPUBLIC OF THE PHILIPPINES </br> All content is in the public domain unless otherwise stated.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	
	
	</body>
</html>

