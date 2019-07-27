<?php
	$faculty_id=$_SESSION['faculty_id'];
	if(isset($_GET['submitbtn']))
	{
		$oldpassword=$_GET['oldpassword'];
		$newpassword=$_GET['newpassword'];
		$sql="select * from faculty_master where faculty_id='".$faculty_id."'";
		include 'db.php';
		$i=mysql_query($sql);
		if($arr=mysql_fetch_array($i))
		{
			if($arr["faculty_id"]==$faculty_id && $arr["password"]==$oldpassword)
			{
				$sql1="update faculty_master set password='".$newpassword."' where faculty_ld='".$faculty_ld."' and password='".$oldpassword."'";
				include 'db.php';
				$j=mysql_query($sql1);
				if($j)
				{
					header('location:facultyhome.php');
				}
			}
			else
			{
				echo "Wrong Password...";
			}
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Password Change..</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			   
<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Change Password</h2>
					    <form method="get">
					    	<div>
						    	<span>Current Password</span>
						    	<span><input type="password" class="form-control" id="password" name="oldpassword"></span>
						    </div>
						    <div>
						    	<span>New Password</span>
						    	<span><input type="password" class="form-control" id="newpassword" name="newpassword"></span>
						    </div>
						    <div>
						    	<span>Confirm Password</span>
						    	<span><input type="password" class="form-control" id="conpassword" name="conpassword"></span>
						    </div>
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="Change password!!" name="submitbtn"></label>
						  </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
</body>
</html>