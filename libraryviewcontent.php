
<?php
		
		include 'db.php';
		$rid=$_GET['regdno'];
		$sql=mysql_query("select * from library_details where regdno='".$rid."'");
		if($arr=mysql_fetch_array($sql))	
		{	
		$s_regdno = $arr['regdno'];	
	    $s_branch=$arr['branch'];
		$s_semester=$arr['semester'];
		$s_year=$arr['year'];
		$s_subjects=explode(',',$arr['subjects']);
		$s_books=explode(',',$arr['books']);
		$s_author=explode(',',$arr['author']);
		}
?>

<?php
	if(isset($_GET['updatelibrarybtn']))
	{
		$regdno=$_GET['regdno'];
		$s1=$_GET['s0'];
		$s2=$_GET['s1'];
		$s3=$_GET['s2'];
		$s4=$_GET['s3'];
		$s5=$_GET['s4'];
		$s6=$_GET['s5'];
		$books=$s1.','.$s2.','.$s3.','.$s4.','.$s5.','.$s6;
		
		$a1=$_GET['a1'];
		$a2=$_GET['a2'];
		$a3=$_GET['a3'];
		$a4=$_GET['a4'];
		$a5=$_GET['a5'];
		$a6=$_GET['a6'];
		$author=$a1.','.$a2.','.$a3.','.$a4.','.$a5.','.$a6;
		
		include 'db.php';
		$sql=mysql_query("UPDATE library_details SET books='".$books."',author='".$author."' where regdno='".$regdno."'");
		if($sql)
		{
			echo "<script>
				alert('Library Details updated');
				window.location.href='managelibrary.php';
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
                         
                            <div id="page-wrap" class="fa-2x">
                            <table class="table table-bordered">
		  						<?php
								$k=0;
									echo '<tr>';
									echo '<th>Subjects</th>';
									echo '<th>Books</th>';
									echo '<th>Author</th>';
									echo '</tr>';
								foreach($s_subjects as $i)
								{	
									
									echo '<tr><td>'.$i.'</td><td><input type="text" name="s'.$k.'" value="'.$s_books[$k].'"/></td>			                                    <td><input type="text" name="s'.$k.'" value="'.$s_author[$k].'"/></td></tr>';
									$k++;
								}  
								?>
                               
                               </table>
                            </div>
                           <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="update" name="updatelibrarybtn"></label>
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