<?php
include 'error.php';
$year=$_POST['year'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$date=$_POST['date'];
		
	include 'db.php';
	{
	$sql=mysql_query("select * from subject_details as t1 left join branch_sem_year as t2 on t1.bsyid=t2.bsyid where t2.branch='".$branch."' and t2.semester='".$semester."' and t2.year='".$year."'");
	
    $sql1=mysql_query("select * from student_master where semester='".$semester."'  and year='".$year."' and branch='".$branch."' ");	
	
	echo'<div id="page-wrap" class="fa-2x">';
	echo '<table class="table table-bordered">';
	echo '<tr>';
	echo '<th>Sl.No</th>';
	echo '<th>Regd No</th>';
	echo '<th>Name</th>';

	
	while($arr=mysql_fetch_array($sql))
	{
		echo '<th>' .$arr["subject1"]. '</th>';
		echo '<th>' .$arr["subject2"]. '</th>';
		echo '<th>' .$arr["subject3"]. '</th>';
		echo '<th>' .$arr["subject4"]. '</th>';
		echo '<th>' .$arr["subject5"]. '</th>';
		echo '<th>' .$arr["subject6"]. '</th>';
		echo '</tr>';
		$j=0;
		$array_regdno="";
		$array_name="";
		mysql_set_charset("utf8");
		while($arr1=mysql_fetch_array($sql1))
		{
			
		    
			$array_regdno=$array_regdno.','.$arr1["regdno"];
			$array_name=$array_name.','.$arr1["fname"];
			
			$s1 = $arr['subject1'];	
			$s2 = $arr['subject2'];	
			$s3 = $arr['subject3'];	
			$s4 = $arr['subject4'];	
			$s5 = $arr['subject5'];	
			$s6 = $arr['subject6'];
			
			
			
			$j++;
			echo'<tr><input type="hidden" name="subj1" value= '.$arr["subject1"].'>';	
			echo '<td> '.$j.' </td>';
			echo '<td>' .$arr1["regdno"]. '</td>';
			echo '<td>' .$arr1["fname"]. '</td>';
			echo '<td>
					<input type="hidden" name="subj2" value= '.$arr["subject2"].'>
					<input class="cb" type="checkbox" value="1" name="cb1" id="ch'.$arr["subject1"].$j.'" /></td>';
					
			echo '<td>
					<input type="hidden" name="subj3" value= '.$arr["subject3"].'>
					<input class="cb" type="checkbox" value="1" name="cb2" id="ch'.$arr["subject2"].$j.'" /></td>';
					
			echo '<td>
					<input type="hidden" name="subj4" value= '.$arr["subject4"].'>
					<input class="cb" type="checkbox" value="1" name="cb3" id="ch'.$arr["subject3"].$j.'"/></td>';
					
			echo '<td>
					<input type="hidden" name="subj6" value= '.$arr["subject5"].'>
					<input class="cb" type="checkbox" value="1" name="cb4" id="ch'.$arr["subject4"].$j.'"/></td>';
					
			echo '<td>
					<input type="hidden" name="subj6" value= '.$arr["subject6"].'>
					<input class="cb" type="checkbox" value="1" name="cb5" id="ch'.$arr["subject5"].$j.'" /></td>';
					
			echo '<td>
					<input type="hidden" name="regdno" value= '.$arr1["regdno"].'>
					<input class="cb" type="checkbox" value="1" name="cb6" id="ch'.$arr["subject6"].$j.'" /></td>';
					
			echo'</tr><input type="hidden" name="fname" value= '.$arr1["fname"].'>';
		}
	
		
	}
	echo '</table>';
	echo'<label class="fa-btn btn-1 btn-1e"><input type="button" value="update" name"updatebtn" id="up_btn"></label>';
	echo'<label class="fa-btn btn-1 btn-1e"><input type="button" value="Select All" name"checkbtn" id="check_btn"></label>';
	
							 						
	echo'<input type="hidden" value='.$array_regdno.'  name="regdno" id="regdno_id"/><br>';
	echo'<input type="hidden" value="'.$array_name.'" name="fname" id="name_id"/><br>';
	
	echo'<input type="hidden" value="'.$branch.'" name="branch" id="branch"/><br>';
	echo'<input type="hidden" value="'.$semester.'" name="semester" id="semester"/><br>';
	echo'<input type="hidden" value="'.$year.'" name="year" id="year"/><br>';
	echo'<input type="hidden" value="'.$date.'" name="date" id="date"/><br>';
	
	echo'<input type="hidden" value='.$j.' id="totalstudent"/><br>';
	echo'<input type="hidden" value='.$s1.' name="s_s1" id="sub1"/><br>';
	echo'<input type="hidden" value='.$s2.' name="s_s2" id="sub2"/><br>';
	echo'<input type="hidden" value='.$s3.' name="s_s3" id="sub3"/><br>';
	echo'<input type="hidden" value='.$s4.' name="s_s4" id="sub4"/><br>';
	echo'<input type="hidden" value='.$s5.' name="s_s5" id="sub5"/><br>';
	echo'<input type="hidden" value='.$s6.' name="s_s6" id="sub6"/><br>';
	
			
	}
?>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#up_btn").on('click',function()
	{
		var a_regdno=$("#regdno_id").val();
		var a_fname=$("#name_id").val();
		
		var branch=$("#branch").val();
		var semester=$("#semester").val();
		var year=$("#year").val();
		var date=$("#date").val();
		
		var sub1=$("#sub1").val();
		var sub2=$("#sub2").val();
		var sub3=$("#sub3").val();
		var sub4=$("#sub4").val();
		var sub5=$("#sub5").val();
		var sub6=$("#sub6").val();
		var totalstudent=$("#totalstudent").val();
		//for each subjects's attendance.
		var sa1="";
		for(var i=1;i<=totalstudent;i++)
		{
			if($("#ch"+sub1+i).is(':checked'))
			{
				sa1=sa1+',1';
			}
			else
			{
			  sa1=sa1+',0';	
			}
			
		}
		var sa2="";
		for(var i=1;i<=totalstudent;i++)
		{
			
			if($("#ch"+sub2+i).is(':checked'))
			{
				sa2=sa2+',1';
			}
			else
			{
			  sa2=sa2+',0';	
			}
			
		}
		var sa3="";
		for(var i=1;i<=totalstudent;i++)
		{
			
			if($("#ch"+sub3+i).is(':checked'))
			{
				sa3=sa3+',1';
			}
			else
			{
			  sa3=sa3+',0';	
			}
			
		}
		
		var sa4="";
		for(var i=1;i<=totalstudent;i++)
		{	
			if($("#ch"+sub4+i).is(':checked'))
			{
				sa4=sa4+',1';
			}
			else
			{
			  sa4=sa4+',0';	
			}
			
		}
		
		var sa5="";
		for(var i=1;i<=totalstudent;i++)
		{	
			if($("#ch"+sub5+i).is(':checked'))
			{
				sa5=sa5+',1';
			}
			else
			{
			  sa5=sa5+',0';	
			}
			
		}
		
		var sa6="";
		for(var i=1;i<=totalstudent;i++)
		{	
			if($("#ch"+sub6+i).is(':checked'))
			{
				sa6=sa6+',1';
			}
			else
			{
			  sa6=sa6+',0';	
			}
			
		}
		
			$.ajax({
			
			type:'post',
			url:'ajax_attendance_update.php',
			data:{a_regdno:a_regdno,sub1:sub1,sub2:sub2,sub3:sub3,sub4:sub4,sub5:sub5,sub6:sub6,sa1:sa1,sa2:sa2,sa3:sa3,sa4:sa4,sa5:sa5,sa6:sa6,a_fname:a_fname,branch:branch,semester:semester,year:year,date:date},
			success: function(res)
			{
				
				alert(res);
				window.location="add_attendance.php";
			}
			
			});
	});

});
</script>






