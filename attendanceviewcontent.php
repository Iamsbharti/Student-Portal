<?php
		
		include 'db.php';
		$rid=$_GET['regdno'];
		$sql=mysql_query("select * from attendance_details where regdno='".$rid."'");
		if($arr=mysql_fetch_array($sql))	
		{	
		$s_regdno = $arr['regdno'];	
	    $s_branch=$arr['branch'];
		$s_semester=$arr['semester'];
		$s_year=$arr['year'];
		$s_subjects=explode(',',$arr['subjects']);
		$s_percentage=explode(',',$arr['attendance']);
		}
?>

<?php
	if(isset($_GET['updateattendancebtn']))
	{
		$regdno=$_GET['regdno'];
		$s1=$_GET['s0'];
		$s2=$_GET['s1'];
		$s3=$_GET['s2'];
		$s4=$_GET['s3'];
		$s5=$_GET['s4'];
		$s6=$_GET['s5'];
		$attendance=$s1.','.$s2.','.$s3.','.$s4.','.$s5.','.$s6;
		include 'db.php';
		$sql=mysql_query("UPDATE attendance_details SET attendance='".$attendance."'  where regdno='".$regdno."'");
		if($sql)
		{
			echo "<script>
				alert('Attendance updated');
				window.location.href='manageattendance.php';
				</script>";
		}
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
                               <br />
                               <br/>
                         <div class="fa-2x">
                             	  <table class="table table-bordered">
		  						<?php
								$k=0;
								echo '<tr>';
									echo '<th>Subjects</th>';
									echo '<th>Percentage</th>';
									echo '</tr>';
								foreach($s_subjects as $i)
								{
									echo '<tr><td>'.$i.'</td><td><input type="text" name="s'.$k.'" value="'.$s_percentage[$k].'"/></td></tr>';
									$k++;
								}  
								?>
                               
                               </table>
                               
                               
                            </div>
                         
                           <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="update" name="updateattendancebtn"></label>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="fa-btn btn-1 btn-1e"><a href="managelibrary.php"><input type="submit" value="cancel" name="cancelbtn" ></a></label></div>
                         
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
 </div>
  </div> 
  </div> 
  </div>