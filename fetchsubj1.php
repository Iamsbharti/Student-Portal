<?php
$year=$_POST['yr'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];

include 'db.php';
$sql=mysql_query("select * from subject_details as t1 left join branch_sem_year as t2 on t1.bsyid=t2.bsyid where t2.branch='".$branch."' and t2.semester='".$semester."' and t2.year='".$year."'");
while($arr=mysql_fetch_array($sql))	
		{
		$s_s1 = $arr['subject1'];	
		$s_s2 = $arr['subject2'];	
		$s_s3 = $arr['subject3'];	
		$s_s4 = $arr['subject4'];	
		$s_s5 = $arr['subject5'];	
		$s_s6 = $arr['subject6'];
		
		
		echo '<table class="table table-bordered">
                             <caption> <legend>Subjects...</legend></caption>
                             <thead>
                              <tr>
                               <td>Subjects</td>
                               <td>Book</td>
							   <td>Author</td>
                             </tr>
							 
                             <tr>
                               <td>'.$s_s1.'</td>
                               <td>
							   <input type="hidden" name="subj1" value="'.$s_s1.'"/>
							   <input type="text" name="s1" value=""/></td>
							   <td><input type="text" name="a1" value=""/></td>
							 </tr>
							 
                             <tr>
							 <td>'.$s_s2.'</td>
                             <td>
							  <input type="hidden" name="subj2" value="'.$s_s2.'"/>
							 <input type="text" name="s2" value=""/></td>
							 <td><input type="text" name="a2" value=""/></td>
                             </tr>
							 
                             <tr>
                             <td>'.$s_s3.'</td>
                             <td>
							  <input type="hidden" name="subj3" value="'.$s_s3.'"/>
							 <input type="text" name="s3" value=""/></td>
							<td> <input type="text" name="a3" value=""/></td>
                             </tr>
                             
                             <tr>
                             <td>'.$s_s4.'</td>
                             <td>
							  <input type="hidden" name="subj4" value="'.$s_s4.'"/>
							 <input type="text" name="s4" value=""/></td>
							 <td><input type="text" name="a4" value=""/></td>
                             </tr>
							 
                             <tr>
                             <td>'.$s_s5.'</td>
                             <td>
							  <input type="hidden" name="subj5" value="'.$s_s5.'"/>
							 <input type="text" name="s5" value=""/></td>
							 <td><input type="text" name="a5" value=""/></td>
                             </tr>
							 
                             <tr>
                             <td>'.$s_s6.'</td>
                             <td>
							  <input type="hidden" name="subj6" value="'.$s_s6.'"/>
							 <input type="text" name="s6" value=""/></td>
							 <td><input type="text" name="a6" value=""/></td>
                             </tr>
                             
                             </thead>
                             </table>';
		
		
		}
	
?>