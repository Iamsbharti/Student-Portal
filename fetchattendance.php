<?php

$year=$_POST['yr'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];

include "db.php";


$sqls=mysql_query("select * from subject_details as t1 left join branch_sem_year as t2 on t1.bsyid=t2.bsyid  where  t2.branch='".$branch."' and t2.semester='".$semester."' and t2.year='".$year."'");
$sub1="";
$sub2="";
$sub3="";
$sub4="";
$sub5="";
$sub6="";

if($sqlsarr=mysql_fetch_array($sqls))
{
$sub1=$sqlsarr['subject1'];
$sub2=$sqlsarr['subject2'];
$sub3=$sqlsarr['subject3'];
$sub4=$sqlsarr['subject4'];
$sub5=$sqlsarr['subject5'];
$sub6=$sqlsarr['subject6'];
								
}				   
?>
                               
<div class=fa-2x>

<?php
echo '<table class="table table-bordered">';
echo'<tr>';
echo'<th>Regdno.</th>';echo'<th>Name</th>';echo '<th>' .$sqlsarr["subject1"]. '</th>';
echo '<th>' .$sqlsarr["subject2"]. '</th>';echo '<th>' .$sqlsarr["subject3"]. '</th>';echo '<th>' .$sqlsarr["subject4"]. '</th>';
echo '<th>' .$sqlsarr["subject5"]. '</th>';echo '<th>' .$sqlsarr["subject6"]. '</th>';echo'</tr>';
$sqlstudent=mysql_query("select * from student_master where  branch='".$branch."' and semester='".$semester."' and year='".$year."'");
		while($arrstudent=mysql_fetch_array($sqlstudent))
		{
			$regdno=$arrstudent['regdno'];
			$name=$arrstudent['fname'];
			$j=0;
			
?>



<?php
							
		$tclass1=0;
		$attn1=0;
		$pattn1=0;
		$sql1=mysql_query("select * from student_attendance where regdno='".$regdno."' and subject1='".$sub1."'");
		while($arr1=mysql_fetch_array($sql1))
		{
			
			$tclass1++;
			if($arr1["attendance1"]!=0)
			{
				$attn1++;
			}
		}
		
		$pattn1=@round(($attn1/$tclass1)*100,2);
									
									
									
		$tclass2=0;
		$attn2=0;
		$pattn2=0;
		$sql2=mysql_query("select * from student_attendance where regdno='".$regdno."' and subject2='".$sub2."'");
		while($arr2=mysql_fetch_array($sql2))
		{
			$tclass2++;
			if($arr2["attendance2"]!=0)
			{
				$attn2++;
			}
		}
		$pattn2=@round(($attn2/$tclass2)*100,2);
									
								
		$tclass3=0;
		$attn3=0;
		$pattn3=0;
		$sql3=mysql_query("select * from student_attendance where regdno='".$regdno."' and subject3='".$sub3."'");
		while($arr3=mysql_fetch_array($sql3))
		{
			$tclass3++;
			if($arr3["attendance3"]!=0)
			{
				$attn3++;
			}
		}
		$pattn3=@round(($attn3/$tclass3)*100,2);
								
									
		$tclass4=0;
		$attn4=0;
		$pattn4=0;
		$sql4=mysql_query("select * from student_attendance where regdno='".$regdno."' and subject4='".$sub4."'");
		while($arr4=mysql_fetch_array($sql4))
		{
			$tclass4++;
			if($arr4["attendance4"]!=0)
			{
				$attn4++;
			}
		}
		$pattn4=@round(($attn4/$tclass4)*100,2);
									
									
	    $tclass5=0;
		$attn5=0;
		$pattn5=0;
		$sql5=mysql_query("select * from student_attendance where regdno='".$regdno."' and subject5='".$sub5."'");
		while($arr5=mysql_fetch_array($sql5))
		{
			$tclass5++;
			if($arr5["attendance5"]!=0)
			{
				$attn5++;
			}
		}
		$pattn5=@round(($attn5/$tclass5)*100,2);
									
								
									
		$tclass6=0;
		$attn6=0;
		$pattn6=0;
		$sql6=mysql_query("select * from student_attendance where regdno='".$regdno."' and subject6='".$sub6."'");
		while($arr6=mysql_fetch_array($sql6))
		{
			$tclass6++;
			if($arr6["attendance6"]!=0)
			{
				$attn6++;
			}
		}
		$pattn6=round(@($attn6/$tclass6)*100,2);
									
		
		
                                
$j++;
                                
echo '<tr>';
/*echo'<td>'.$j.'</td>';*/
echo'<td>'.$regdno.'</td>';
echo'<td>'.$name.'</td>';
echo'<td>'.$pattn1.'</td>';
echo'<td>'.$pattn2.'</td>';
echo'<td>'.$pattn3.'</td>';
echo'<td>'.$pattn4.'</td>';
echo'<td>'.$pattn5.'</td>';
echo'<td>'.$pattn6.'</td>';
echo'</tr>';
}
echo'</table>';
echo'<div>
<label class="fa-btn btn-1 btn-1e">
<input type="button" value="print" onclick="myFunction()"></label>
</div>';
?>      
<script>
function myFunction() {
    window.print();
}
</script>
                       
</div>
</body>