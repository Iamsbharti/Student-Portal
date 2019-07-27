<?php
	if(isset($_GET['updateattendancebtn']))
	{
		$year=$_GET['year'];
		$branch=$_GET['branch'];
		$semester=$_GET['semester'];
		$regdno=$_GET['regdno'];
		$subj1=$_GET['subj1'];
		$subj2=$_GET['subj2'];
		$subj3=$_GET['subj3'];
		$subj4=$_GET['subj4'];
		$subj5=$_GET['subj5'];
		$subj6=$_GET['subj6'];
		$subjs=$subj1.','.$subj2.','.$subj3.','.$subj4.','.$subj5.','.$subj6;
		
		$s1=$_GET['s1'];
		$s2=$_GET['s2'];
		$s3=$_GET['s3'];
		$s4=$_GET['s4'];
		$s5=$_GET['s5'];
		$s6=$_GET['s6'];
		$attendance=$s1.','.$s2.','.$s3.','.$s4.','.$s5.','.$s6;
		
		
		include 'db.php';
		$sql="insert into attendance_details values('','".$year."','".$branch."','".$semester."','".$subjs."','".$attendance."','".$regdno."')";
		$i=mysql_query($sql);
		if($i)	{
			$regdno=$_GET['regdno'];
			echo "<script>
			alert('Attendance updated');
			window.location.href='addattendance.php';
			</script>";
		}
		else
		{
			echo "<script>
			alert('Not Updated Try Again!!!);
			window.location.href='addattendance.php';
			</script>";
			}
	}

	
	
	
	
	
	
?>

<script type="text/javascript">

$(document).ready(function(e) {
    $("#showsubj").click(function()
	{
		var year=$("#year").val();
		var branch=$("#branch").val();
		var semester=$("#semester").val();
		$.ajax({
			
				type:'post',
				url:'fetchsubj.php',
				data:{yr:year,branch:branch,semester:semester},
				success: function(res)
				{
					$("#subjectlist").html(res);
				}
			
			});
		
		
	});
});
</script>





<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			   
<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Add Attendance</h2>
					    <form method="GET">
					    	<div>
						    	<legend>Year</legend>
             					<span><select name="year" id="year" size="1" class="form-control">
             					<option value="2015">2015</option>
             				    <option value="2014">2014</option>
                				<option value="2013">2013</option>
                               </select>
             					</span>
						    </div>
						    <div>
						    	<legend>Branch</legend>
             					<span><select name="branch" id="branch" size="1" class="form-control">
             					<option value="CSE">Computer Science & Enggenieering</option>
             				    <option value="etc">ETC</option>
                				<option value="aei">AEI</option>
                                 <option value="mechanical">Mechanical</option>
                				<option value="electrical">Electrical</option>
                                 <option value="civil">Civil</option>
                				<option value="mba">MBA</option>
                                </select>
             					</span>
						    </div>
						    <div>
						    	<legend>Semester</legend>
             					<span><select name="semester" id="semester" size="1" class="form-control">
             					<option value="1st">1st</option>
             				    <option value="2nd">2nd</option>
                				<option value="3rd">3rd</option>
                                <option value="4th">4th</option>
             				    <option value="5th">5th</option>
                				<option value="6th">6th</option>
                                <option value="7th">7th</option>
             				    <option value="8th">8th</option>
                				</select>
             					</span>
						    </div>
                            
                            <div>
                            <label class="fa-btn btn-1 btn-1e"><input type="button" value="Show" name="show" id="showsubj"></label>
                            </div>
                            
                            <div>
                            	<legend>Regd No:</legend>
                                <span><input type="text" class="form-control" id="regd" name="regdno" ></span>
                            </div>
						  
                             <div id="subjectlist">
                            
                             
                       
                            	</div>
                              <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="update" name"updateattendancebtn"></label>
						  </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>