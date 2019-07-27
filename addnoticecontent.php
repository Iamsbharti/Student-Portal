<?php
$dt=date('y/m/d');
?>
<?php

	if(isset($_POST['updatebtn']))
	{
		$subject=$_POST['subject'];
		$title=$_POST['title'];
		$notice=$_POST['notice'];
		include 'db.php';
		$sql="insert into notice_details values('','".$subject."','".$title."','".$notice."','".$dt."')";
		$i=mysql_query($sql);
		if($i)	
		{
		echo "<script>
			alert('Notice Added.');
			window.location.href='adminhome.php';
			</script>";
		}
	}

?>
<html>
<body>
<div class="main_bg">
	<div class="container">
		<div class="main row">
			<div class="col-md-6 blog_left">
				
				<p class="para">
                 <div class="contact-form">
				  <h4 class="fa-2x"> Add Notice</h4>
					    <form method="POST">
					    	<div>
						    	<legend>Subject</legend>
             			<span><select name="subject" id="subject" size="1" class="form-control">
              			<option value="Events">Events</option>
              			<option value="Seminar">Seminar</option>
              			<option value="Exam">Exam Section</option>
              			<option value="Library">Library</option>
              			<option value="Account">Accounts Section</option>
              			<option value="Department">Department</option>
                		</select>
             			</span>
						 </div>
                 			
                            <div>
                            	 <legend>Title</legend>
                                 <span><textarea name="title"> </textarea></span>
                            </div> 
                            
                             <div>
                            	<legend> Notice</legend>
                                 <span><textarea name="notice"> </textarea></span>
                             </div>
						   
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="Add" name="updatebtn"></label>
				 </div>
					    </form>
                </p>
			</div>
            </div>
            </div>
            </div>
            </div>
            </body>
            </html>