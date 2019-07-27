
<?php
		
		include 'db.php';
		$rid=$_GET['regdno'];
		$sql=mysql_query("select * from account_details where regdno='".$rid."'");
		if($arr=mysql_fetch_array($sql))	
		{	
		$s_regdno = $arr['regdno'];	
	    $s_branch=$arr['branch'];
		$s_semester=$arr['semester'];
		$s_year=$arr['year'];
		$s_amount=$arr['amount'];
		
		}
?>

<?php
	if(isset($_GET['updateaccountbtn']))
	{
		$regdno=$_GET['regdno'];
		$branch=$_GET['branch'];
		$semester=$_GET['semester'];
		$year=$_GET['year'];
		$accountdetails=$_GET['accountdetails'];
		
		include 'db.php';
		$sql=mysql_query("UPDATE account_details SET semester='".$semester."',year='".$year."',branch='".$branch."',amount='".$accountdetails."' where regdno='".$regdno."'");
		if($sql)
		{
			echo "<script>
				alert('Account Details updated');
				window.location.href='manageaccount.php';
				</script>";
		}
	}
?>
<?php
if(isset($_GET['cancelbtn']))
{
	header('location:adminhome.php');
}
?>


<div class="main_bg">
	<div class="container">
		<div class="main row">
			   
<div class="col-md-6 blog-left">
				  <div class="contact-form">
                  <form method="get">
                  <div>
                            <legend>Details</legend>
                       
                  </div>
                   <div>
                            	<span>Regd No:</span>
                                <span><input type="text" class="form-control" id="regd" name="regdno"   value="<?php echo $s_regdno; ?>"></span>
                            </div>
						  
                             <div>
                                <span>Semester</span>
                                <span><input type="text" class="form-control" id="semester" name="semester"  value="<?php echo $s_semester; ?>"></span>
                            </div>
                            </div>
                            </div>
                            
                            
                            <div class="main_bg">
							<div class="container">
							<div class="main row">
			   				<div class="col-md-6 blog-left">
				  			<div class="contact-form">
						    <div>
						    	<span>Branch</span>
						    	<span><input type="text"  id="branch"  class="form-control" name="branch"  value="<?php echo $s_branch; ?>"></span>
						    </div>
                             
						    <div>
						    	<span>Year</span>
						    	<span><input type="text" class="form-control" id="year" name="year"  value="<?php echo $s_year; ?>" ></span>
						    </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="fa-2x">
                            <legend>Account Details</legend>
                            <span><textarea name="accountdetails"  style="baseline-shift:!important"><?php echo $s_amount; ?> </textarea></span>
                           </div>
                           
                           <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="update" name="updateaccountbtn"></label>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="fa-btn btn-1 btn-1e"><a href="manageaccount.php"><input type="submit" value="cancel" name="cancelbtn"></a></label></div>
                    	 </form>
                         
  			<div class="clearfix">
            </div>		
            </div>
</div>
 </div>
  </div> 
  </div> 
  </div>




