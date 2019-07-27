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
<div class="main_bg">
	<div class="container">
		<div class="main row">
			<div class="col-md-5 blog_left"> 
 <div>
<form>
            
<legend class="fa-2x">Admin Login(Please Enter Correct Credentials)</legend>
<div>
<input type="text" class="form-control" value="Admin ID." name="adminid" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'REGD. NO.';}" ></div>
</br>
<div>
<input type="password" value="Password" name="password" class="form-control" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}"></div></br>

<div class="submit">
<label class="fa-btn btn-1 btn-1e"><input type="submit" value="Login" name="loginbtn"></label>
</div>
</form>
</div>
</div>
</div>
</div>
</div>	

