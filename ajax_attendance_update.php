<?php
		include 'db.php';
		
	    $branch=$_POST['branch'];
		$semester=$_POST['semester'];
		$year=$_POST['year'];
		$date=$_POST['date'];
		
		$regdno=$_POST['a_regdno'];
		$fname=$_POST['a_fname'];
		
		$subject1=$_POST['sub1'];
		$subject2=$_POST['sub2'];
		$subject3=$_POST['sub3'];
	 	$subject4=$_POST['sub4'];
		$subject5=$_POST['sub5'];
		$subject6=$_POST['sub6'];
	    
		$attendance1=$_POST['sa1'];
		$attendance2=$_POST['sa2'];
		$attendance3=$_POST['sa3'];
		$attendance4=$_POST['sa4'];
		$attendance5=$_POST['sa5'];
		$attendance6=$_POST['sa6'];
		
		$array_regdno=trim($regdno,',');
		$n_regdno=explode(',',$array_regdno);

		$array_name=trim($fname,',');
		$n_name=explode(',',$array_name);
		
		$array_attendance1=trim($attendance1,',');
		$n_attendance1=explode(',',$array_attendance1);
		
		$array_attendance2=trim($attendance2,',');
		$n_attendance2=explode(',',$array_attendance2);
		
		$array_attendance3=trim($attendance3,',');
		$n_attendance3=explode(',',$array_attendance3);
		
		$array_attendance4=trim($attendance4,',');
		$n_attendance4=explode(',',$array_attendance4);
		
		$array_attendance5=trim($attendance5,',');
		$n_attendance5=explode(',',$array_attendance5);
		
		$array_attendance6=trim($attendance6,',');
		$n_attendance6=explode(',',$array_attendance6);

		
		$i=0;
		foreach($n_regdno as $k)
		{
			$sql="insert into student_attendance values('','".$k."','".$n_name[$i]."','".$date."','".$subject1."',
			'".$n_attendance1[$i]."','".$subject2."','".$n_attendance2[$i]."','".$subject3."','".$n_attendance3[$i]."',
			'".$subject4."','".$n_attendance4[$i]."','".$subject5."','".$n_attendance5[$i]."','".$subject6."','".$n_attendance6[$i]."'
			,'".$branch."','".$semester."','".$year."')";
			$i++;
			mysql_query($sql);
		}
		
		echo "Attendance updated successfully";
		
?>
