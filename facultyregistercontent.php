<?php
	if(isset($_GET['submitbtn']))
	{
		$name=$_GET['name'];
		$faculty_id=$_GET['faculty_id'];
		$password=$_GET['password'];
		$sque=$_GET['sque'];
		$answer=$_GET['answer'];
		$email=$_GET['email'];
		$phone=$_GET['phone'];
		include 'db.php';
		$sql="insert into faculty_master values('".$name."','".$faculty_id."','".$password."','".$sque."','".$answer."','".$email."','".$phone."','0','images/blog_pic1.jpg')";
		$i=mysql_query($sql);
		if($i)	{
			$msg="success";
		}
		else
		{
			$msg="error";
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="css/register.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/register1.css" media="all" />
<style type="text/css">
h1.signup{color:#09F;text-shadow:5px 5px 5px #00FFFF;}
</style>
</head>
<body>
<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
               
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<center><h1 class="signup"><span>Sign up form</span> </h1></center>
            </header>       
      <div  class="form">
    		<form id="contactform"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="faculty_id">Faculty_id</label></p> 
    			<input id="faculty_id" name="faculty_id"  required type="faculty_id">  
    			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="password" required> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required>
  
            <select class="select-style gender" name="sque">
            <option value="select">security question</option>
            <option value="1">what is your favorite subject?</option>
            <option value="2">who is your favorite author?</option>
            <option value="3">who is your favorite freedom fighter?</option>
            <option value="4">who is your idol?</option>
            </select><br><br>
            <p class="contact"><label for="answer">Enter your Answer</label></p> 
    			<input id="username" name="answer" placeholder="answer" required  type="text">
                <p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required type="email"> 
            
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required type="text"> <br>
            <input class="buttom" name="submitbtn" id="submit" tabindex="5" value="Sign me up!" type="submit"> 
            	<?php 
				 if(isset($msg))
				 {
					 echo $msg;
					 
					}
				?> 
   </form> 
</div>      
</div>

</body>
</html>
