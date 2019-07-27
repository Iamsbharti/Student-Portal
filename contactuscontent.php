<?php
$dt=date('d/m/y');
?>
<?php
	if(isset($_POST['sendbtn']))
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$usercon=$_POST['usercon'];
		$usersub=$_POST['usersub'];
		$usermsg=$_POST['usermsg'];
	    include 'db.php';
		$sql="insert into user_feedback values('','".$username."','".$email."','".$usercon."','".$usersub."','".$usermsg."','".$dt."')";
		$i=mysql_query($sql);
		if($i)	{
			
			echo "<script>
			alert('Thank you for the feedback!!!');
			window.location.href='index.php';
			</script>";
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Contact us</title>
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
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=""https://maps.google.co.in/maps/place/Konark+Institute+of+Science+and+Technology/@20.1895451,85.7009413,17z/data=!3m1!4b1!4m2!3m1!1s0x3a19aec822dfcd1d:0xb759294e37dc6d74"></iframe><br><small>
<a href="https://www.google.co.in/maps/place/Konark+Institute+of+Science+and+Technology/@20.1895451,85.7009413,17z/data=!3m1!4b1!4m2!3m1!1s0x3a19aec822dfcd1d:0xb759294e37dc6d74" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			    <div class="col-md-4 company_ad">
				    <h2>CONTACT US AT.. </h2>
      				<address>
						<p>Post Box No. 21, Techno Park, Jatni-752050</p>
						<p>Bhubaneswar, Odisha</p>
						<p>Phone no: +91-(0674)-2490962, 2490965, 2490964</p>
						<p>Fax no: +91-(0674)-2490962</p>
						<p>E-mail us at - info@kist.ac.in</p>
                        <h2>CORPORATE OFFICE..</h2>
                        <p>Plot No -76, Satya Nagar</p>
                        <p> Near Kali mandir, Bhubaneswar</p>
                        <p>Tel. No : +91-(0674)- 2575872, </p>
                        <p>Contact Mobile No : +91-9090959524, 9090959525, 9437940440</p>
				   	</address>
				</div>
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Give Your Feedback</h2>
					    <form method="POST">
					    	<div>
						    	<span>Name</span>
						    	<span><input type="username"  id="userName" name="username"></span>
						    </div>
						    <div>
						    	<span>E-mail Id</span>
						    	<span><input type="email"  id="inputEmail3"  name="email" maxlength="100"></span>
						    </div>
                              <div>
						    	<span>Contact no</span>
						    	<span><input type="text" name="usercon"></span>
						    </div>
						    <div>
						    	<span>subject</span>
						    	<span><input type="textarea" name="usersub"></span>
						    </div>
                              <div>
						    	<span>Message</span>
						    	<span><textarea name="usermsg"> </textarea></span>
						    </div>
                            
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="send us" name="sendbtn"></label>
						  </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
