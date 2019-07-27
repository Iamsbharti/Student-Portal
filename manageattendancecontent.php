<head>
<script type="text/javascript">

$(document).ready(function(e) {
    $("#showattendance").click(function()
	{
		var year=$("#year").val();
		var branch=$("#branch").val();
		var semester=$("#semester").val();
/*		var limit=$("#limit").val();*/
		$.ajax({
			
				type:'post',
				url:'fetchattendance.php',
				data:{yr:year,branch:branch,semester:semester},
				success: function(res)
				{
					$("#studentlist").html(res);
				}
			
			});
		
		
	});
});
</script>
</head>

<body>
	<div class="main_bg">
		<div class="container">
			<div class="main row">
			   
				<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Manage Attendance</h2>
					    <form method="get">
					    	<div>
						    	<legend>Batch</legend>
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
             					<option value="cse">Computer Science & Enggenieering</option>
             				    <option value="etc">ETC</option>
                				<option value="aei">AEI</option>
                                 <option value="mechanical">Mechanical</option>
                				<option value="electrical">Electrical</option>
                                 <option value="civil">Civil</option>
                				<option value="mba">MBA</option>
                                </select>
             					</span>
						    </div>
                           
                            
                          </div>
                          </div>
                			
                            <div class="main_bg">
								<div class="container">
									<div class="main row">
			   							<div class="col-md-6">
                                            <div class="contact-form">
				
                                      
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
                              <!--/*<div>
                                <legend>Percentage Limit</legend>
						    	<span><input type="text" class="form-control"  id="limit" name="limit"/></span>
						    </div>*/-->
                            <br>
                            <br>
                            
                            
                             <div>
								<label class="fa-btn btn-1 btn-1e">
                                <input type="button" value="show" name="showattendance" id="showattendance"></label>
    						  </div>
                          </div>
                          </div>
                          </div>
                          <div id="studentlist">
                          
                          
                          </div>
                             </div>	
                             	</div>	
  			<div class="clearfix">
            
            </div>		
	</div> 
</div>
</div>
</form>
</body>
 
