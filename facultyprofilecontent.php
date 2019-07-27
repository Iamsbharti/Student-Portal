<?php
		
		include 'db.php';
		$sql=mysql_query("select * from faculty_master where faculty_id='".$_SESSION['faculty_id']."'");
		if($arr=mysql_fetch_array($sql))	
		{
		$s_name = $arr['name'];	
		$s_regdno = $arr['faculty_id'];	
		$s_email = $arr['email_id'];	
		$s_contact = $arr['contactno'];	
		$s_sque = $arr['sque'];	
		$s_answer = $arr['answer'];	
		$s_img=$arr['photo'];
		$s_dept = $arr['department'];	
		$s_dob = $arr['dob'];	
		$s_paddress = $arr['paddress'];	
		$s_taddress = $arr['taddress'];
		}
?>
<?php
if(isset($_GET["updatebtn"]))
	{	
		$name=$_GET['name'];
		$facultyid=$_GET['facultyid'];
		$email=$_GET['email'];
		$contactno=$_GET['contactno'];
		$sque=$_GET['sque'];
		$answer=$_GET['answer'];
		$dept=$_GET['dept'];
		$dob=$_GET['dob'];
		$paddress=$_GET['paddress'];
		$taddress=$_GET['taddress'];
		include 'db.php';
		$sql=mysql_query("UPDATE faculty_master SET  name='".$name."',faculty_id='".$facultyid."',email_id='".$email."',contactno='".$contactno."',sque='".$sque."',answer='".$answer."',department='".$dept."',dob='".$dob."',paddress='".$paddress."',taddress='".$taddress."' where faculty_id='".$facultyid."'");
		if($sql)
		{
			header('location:facultyprofile.php');
		}
	}
?>
<?php
if(isset($_POST["uploadbtn"]))
{
	//$photo=$_FILES['up']['name'];
	$photo=$_SESSION["faculty_id"].'.png';
	move_uploaded_file($_FILES['up']['tmp_name'],"faculty_img/".$photo);
	include 'db.php';
		$sql=mysql_query("UPDATE faculty_master SET  photo='".$photo."' where faculty_id='".$_SESSION['faculty_id']."'");
		if($sql)
		{
			echo "<script>
			alert('Image uploaded');
			window.location.href='facultyprofile.php';
			</script>";
		}
}
?>
<html>
<body>
<div class="main_bg">
	<div class="container">
		<div class="main row">
			<div class="col-md-5 blog_left">
				<h2>Profile</h2>
				<a href="single-page.html"><img src="faculty_img/<?php echo $s_img; ?>" alt="" class="blog_img img-responsive"/></a>
                <div class="contact-form">
                	<form method="post" enctype="multipart/form-data">
                	<div class="fa-2x">
			    		<input type="file"   id="up" name="up">
			    	</div>
                    <div>
						<label class="fa-btn btn-1 btn-1e"><input type="submit" value="Upload" name="uploadbtn"></label>
				    </div>
                	</form>
                </div>
				<div class="blog_list">
					  <ul class="list-unstyled">
						<li><i class="fa fa-calendar-o"></i><span>Aug 18, 2015</span></li>
						<li><a href="#"><i class="fa fa-comment"></i><span>Comments</span></a></li>
				  		<li><a href="#"><i class="fa fa-user"></i><span>Admin</span></a></li>
				  		<li><a href="#"><i class="fa fa-eye"></i><span>124 views</span></a></li>
					  </ul>
				</div>
				<p class="para">
                 <div class="contact-form">
				  	<strong><h2>Details...</h2></strong>
					    <form method="get">
					    	<div>
						    	<span>Name</span>
						    	<span> <input type="text" class="form-control"  id="name" name="name" value="<?php echo $s_name; ?>" /> </span>
						    </div>
                            
                            <div>
                            	<span>Faculty_Id.</span>
                                <span><input type="text" class="form-control" id="facultyid" name="facultyid" value="<?php echo $s_regdno; ?>"></span>
                            </div>
                            
						    <div>
						    	<span>Email</span>
						    	<span><input type="email"  id="email"  class="form-control" name="email" value="<?php echo $s_email; ?>" ></span>
						    </div>
                            
                             <div>
						    	<span>Mobile No</span>
						    	<span><input type="text" class="form-control" id="contactno" name="contactno" value="<?php echo $s_contact; ?>" ></span>
						    </div>
                            
						    <div>
						    	<span>Security Question</span>
						    	<span><input type="text" class="form-control" id="sque" name="sque" value="<?php echo $s_sque; ?>" ></span>
						    </div>
                            
                             <div>
						    	<span>Answer</span>
						    	<span><input type="text" class="form-control" id="answer" name="answer" value="<?php echo $s_answer; ?>" ></span>
						    </div>
                            
                            <div>
                            	<span>Depatment</span>
                                <span><input type="text" class="form-control" id="dept" name="dept"  value="<?php echo $s_dept; ?>"></span>
                            </div>
                            
                             <div>
                            	<span>D.O.B</span>
                                <span> <input type="text" class="form-control" id="dob" name="dob"  value="<?php echo $s_dob; ?>"></span>
                            </div>
                            
                            <div>
                            	<address><span>Permanent Address</span>
                                 <span><textarea name="paddress"><?php echo $s_paddress; ?></textarea></span>
                                </address>
                            </div>
                            
                             <div>
                            	<address><span>Temporary Address</span>
                                 <span><textarea name="taddress"><?php echo $s_taddress; ?> </textarea></span>
                                </address>
                            </div>
						   
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="Update" name="updatebtn"></label>
				           </div>
					    </form>
                    </p>
			</div>
            </div>
             
                <?php
if(isset($_POST['addbtn']))	
{
    $add = $_POST['add'];
    switch ($add) 
	{
        case 'notice':
        header('location:addnotice.php');
            break;
        case 'attendance':
            header('location:add_attendance.php');
            break;
		case 'result':
        header('location:addresult.php');
            break;
       
       
     }
}
?>
<div class="main_bg">
	<div class="container">
		<div class="main row">
			<div class="col-md-5 blog_left"> 
 <div>
             
             <div>
             <form method="post">
            
             <legend>Add Student's information...</legend>
             <span><select name="add" id="add" size="1" class="form-control">
              <option value="notice">Notice</option>
              <option value="attendance">Attendance</option>
              <option value="result">Result</option>
              
                </select>
             </span>
              <div>
			   <label class="fa-btn btn-1 btn-1e"><input type="submit" value="Add" name="addbtn"></label>
			  </div>
             </form>
             </div> 
             
          
</div>
	</div>
		</div>
			</div>
         
                
                
                
                
          
           </div>
           </div>
           </div>
            
            </body>
           </html>