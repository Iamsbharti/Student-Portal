<?php
ob_start();
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/kist_logo.gif"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="index.php">Student Portal</a></h1>
		</div>
		<div class="h_search navbar-right">
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		       <li ><a href="adminhome.php">Home</a></li>
		        <li><a href="aboutus.php">About us</a></li>
		       
                <li><a href="contactus.php">Contact Us & Feedback</a></li>
                <li><a href="research.php">Research</a></li>
                <li><a href="facultylogin.php">Faculty</a></li>
                <li class="active"><a href="#">Admin</a></li>
                <li><a href="adminlogout.php" >Logout</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				
				<li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
			
				<li><a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
              
			
				<li><a href="www.googleplus.in"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="www.youtube.com"><i class="fa fa-youtube"></i></a></li>
			
			</ul>	
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
