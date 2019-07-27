<?php
if(isset($_POST['managebtn']))	
{
    $manage = $_POST['manage'];
    switch ($manage) 
	{
        case 'student':
        header('location:managestudent.php');
            break;
        case 'faculty':
            header('location:managefaculty.php');
            break;
		case 'notice':
        header('location:managenotice.php');
            break;
        case 'attendance':
            header('location:manageattendance.php');
            break;
		case 'feedback':
        header('location:viewfeedback.php');
            break;
        case 'librarydetails':
            header('location:managelibrary.php');
            break;
		case 'accountdetails':
            header('location:manageaccount.php');
            break;
       
     }
}
?>
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
        case 'librarydetails':
            header('location:addlibrarydetails.php');
            break;
		case 'accountdetails':
            header('location:addaccount.php');
            break;
       
     }
}
?>
<div class="main_bg">
	<div class="container">
		<div class="main row">
			<div class="col-md-5 blog_left"> 
 <div>
             <form method="post">
            
             <legend>Manage...</legend>
             <span><select name="manage" id="manage" size="1" class="form-control">
              <option value="student">Student</option>
              <option value="faculty">Faculty</option>
              <option value="notice">Notice</option>
              <option value="attendance">Attendance</option>
              <option value="feedback">Feedback</option>
              <option value="librarydetails">Library Details</option>
               <option value="accountdetails">Account Details</option>
                </select>
             </span>
              <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="Manage" name="managebtn"></label>
				 </div>
   </form>        
 </div> 
             
            <div class="fa-2x">
            	<a href="web_c.php">Count Visitors</a>
            </div>





             				
			 <div>
             <form method="post">
            
             <legend>Add...</legend>
             <span><select name="add" id="add" size="1" class="form-control">
              <option value="notice">Notice</option>
              <option value="attendance">Attendance</option>
              <option value="result">Result</option>
              <option value="librarydetails">Library Details</option>
              <option value="accountdetails">Account Details</option>
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
         