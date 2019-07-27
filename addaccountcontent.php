<?php
	if(isset($_GET["addaccountbtn"]))
	{	
		
		$regdno=$_GET['regdno'];
	    $branch=$_GET['branch'];
		$semester=$_GET['semester'];
		$year=$_GET['year'];
		$account=$_GET['account'];
		
	
		include 'db.php';
		$sql="insert into account_details values('','".$regdno."','".$semester."','".$year."','".$branch."','".$account."')";
		$i=mysql_query($sql);
		if($i)	
		{
			echo "<script>
			alert('Account Details updated');
			window.location.href='addaccount.php';
			</script>";
		}
	}
?>

<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			   
<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Add Account Details</h2>
					    <form method="get">
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
                            	<legend>Regd No:</legend>
                                <span><input type="text" class="form-control" id="regd" name="regdno" ></span>
                            </div>
						  
                        <div>
                         <legend>Account Details</legend>
                   		<span><textarea name="account"> </textarea></span>
                       </div>                             
                              <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="update" name="addaccountbtn"></label>
						  </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>