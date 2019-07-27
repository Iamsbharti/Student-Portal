<?php
if(isset($_POST["uploadbtn"]))
{
	    $regdno=$_POST['regdno'];
		$branch=$_POST['branch'];
		$semester=$_POST['semester'];
		$year=$_POST['year'];
		$type=$_POST['type'];
	    $result=$_POST['regdno'].'_'.$semester.'_'.$type.'.html';
	    move_uploaded_file($_FILES['up']['tmp_name'],"student_result/".$result);
	    include 'db.php';
		$sql="insert into student_result values('','".$regdno."','".$branch."','".$semester."','".$year."','".$result."','".$type."')";
		$i=mysql_query($sql);
		{
			echo "<script>
			alert('Result uploaded');
			window.location.href='addresult.php';
			</script>";
		}
}
?>
<title>upload result</title>

<div class="main_btm">
	<div class="container">
		<div class="main row">
			   
<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Add Result</h2>
					    <form method="post" enctype="multipart/form-data">
					    
						    	 <div>
                            	<legend>Regd No:</legend>
                                <span><input type="text" class="form-control" id="regd" name="regdno" ></span>
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
						    	<legend>Year</legend>
             					<span><select name="year" id="year" size="1" class="form-control">
             					<option value="2015">2015</option>
             				    <option value="2014">2014</option>
                				<option value="2013">2013</option>
                                <option value="2012">2012</option>
                                </select>
             					</span>
						    </div>
						    <div>
                          
                	<div class="fa-2x">
			    		<legend>Result File</legend><input type="file"   id="up" name="up">
			    	</div>
                    
                    <div>
                     <legend>Type</legend>
             					<span><select name="type" id="type" size="1" class="form-control">
             					<option value="regular">Regular</option>
             				    <option value="backpaper">Backpaper</option>
                				<option value="special">Special</option>
                                </select>
             					</span>
                     </div>
             
                    <div>
						<label class="fa-btn btn-1 btn-1e"><input type="submit" value="Upload" name="uploadbtn"></label>
				    </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>