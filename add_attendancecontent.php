<html>
<head>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#showsubj").click(function()
	{
		var year=$("#year").val();
		var branch=$("#branch").val();
		var semester=$("#semester").val();
		var date=$("#date").val();
		
		$.ajax({
			
				type:'post',
				url:'fetchsubj_attendance.php',
				data:{year:year,branch:branch,semester:semester,date:date},
				success: function(res)
				{
					$("#attendancelist").html(res);
				}
			
			});
		
		
	});
});

</script>
</head>


<body >

        <div class="main_bg">
            <div class="container">
                <div class="main row">
                    <div class="col-md-5 blog_left">
                    	<fieldset>
                        <legend>Attendance Entry...</legend>
             			  <div class="contact-form">
					    	<form method="GET">
					    	<div>
						    	<h5>Batch</h5>
             					<span><select name="year" id="year" size="1" class="form-control">
             					<option value="2015">2015</option>
             				    <option value="2014">2014</option>
                				<option value="2013">2013</option>
                                <option value="2012">2012</option>
                               </select>
             					</span>
						    </div>
							 
						    <div>
						    	<h5>Semester</h5>
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
               
                         </div>
                     
                     </div>
                      
        
        <div class="main_bg">
			<div class="container">
				<div class="main row">
            		<div class="col-md-6 blog_right">
           				<div class="contact-form">
               			<div>
						    	<h5>Branch</h5>
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
                                <span>Date</span>
						    	<span><input type="text" class="form-control"  id="date" name="date" value="<?php echo date("D M d,Y"); ?>"></span>
						    </div>
                        </div>
                        
                     </div>
                      <div id="attendancelist"></div>
                         
                </div>
                
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>  
               
         </div>              
     </form>
</body>
</html>