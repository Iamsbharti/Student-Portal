<?php
	if(isset($_GET['submitbtn']))
	{
		$faculty_ld=$_GET['faculty_ld'];
		$sque=$_GET['sque'];
		$answer=$_GET['answer'];
		include 'db.php';
		$sql=mysql_query("select * from faculty_master where faculty_ld='".$faculty_ld."' and sque='".$sque."' and answer='".$answer."'");
		if($arr=mysql_fetch_array($sql))	
		{
		$s_pwd = $arr['password'];	
		echo '<script type="text/javascript">alert("'."your password is : ".''.$s_pwd.'");
		window.location.href="facultylogin.php";
		</script>';
		}
		else
		{
			echo "<script>
			alert('please enter correct data');
			window.location.href='facultyforget.php';
			</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Forget Password</title>
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
				<center><h1 class="signup"><span>Get your Password...</span> </h1></center>
            </header>       
      <div  class="form">
    		<form id="contactform"> 
    			
                <p class="contact"><label for="faculty_ld">Enter your faculty_ld </label></p> 
    			<input id="faculty_ld" name="faculty_ld" placeholder="faculty_ld" required  type="text" maxlength="30" tabindex="1"> 
    			 
                
            <select class="select-style gender" name="sque" tabindex="2">
            <option value="select">security question</option>
            <option value="1">what is your favorite subject?</option>
            <option value="2">who is your favorite author?</option>
            <option value="3">who is your favorite freedom fighter?</option>
            <option value="4">who is your idol?</option>
            </select><br><br>
            <p class="contact"><label for="answer">Enter your Answer</label></p> 
    			<input id="faculty_ld" name="answer" placeholder="answer" required  type="text" tabindex="3"> 
            
            
            <input class="buttom" name="submitbtn" id="submit"  value="Show password!" type="submit" tabindex="4"> 
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
