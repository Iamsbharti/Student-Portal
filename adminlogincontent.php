<?php
	if(isset($_GET['loginbtn']))
	{
		$adminid=$_GET['adminid'];
		$password=$_GET['password'];
		$sql="select * from admin_master where adminid='".$adminid."' and password='".$password."'";
		include 'db.php';
		$q=mysql_query($sql);
		if($arr=mysql_fetch_array($q))
		{
			$_session['regdno']=$regdno;
			header('location:adminhome.php');
		}
		else
		{
				echo "<script>
alert('please enter correct data');
window.location.href='adminlogin.php';
</script>";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<meta charset="utf-8">
		<link href="css/studentlogin.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>Admin Login</h1>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
				<form>
						<input type="text" class="text" value="Admin." name="adminid" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'REGD. NO.';}" >
						<input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">
						<div class="submit">
							<input type="submit"  value="LOGIN" name="loginbtn">
                         
					</div>	
				
				</form>
			</div>
			<!--//End-login-form-->
			 <!-----start-copyright---->
   					
				<!-----//end-copyright---->
		</div>
			 <!-----//end-main---->
            </body>
      


      
      
      
</html>
