<?php
$year=$_POST['yr'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];

include 'db.php';
{
$sql=mysql_query("select * from student_master where branch='".$branch."' and semester='".$semester."' and year='".$year."'");
	echo'<div id="page-wrap" class="fa-2x">';
	echo '<table class="table table-bordered">';
	echo '<tr>';
	echo '<th>Registration no</th>';
	echo '<th>Name</th>';
	echo '<th>Action</th>';
	echo '</tr>';
	while ($arr=mysql_fetch_array($sql))
	{ 
	$s_regdno = $arr['regdno'];	
	$s_name = $arr['fname'];	
		
		echo '<tr>';
		echo '<td>' .$arr["regdno"]. '</td>';
		echo '<td>' .$arr["fname"]. '</td>';	
		echo '<td><a href="libraryview.php?regdno='.$s_regdno.'">
				  <input type="button" name="viewbtn" id="view" value="Edit Details"/>
	    		  </a>';
		echo '</td>';
		echo '</tr>';
		
		
	}
	echo '</table>';
	}
?>

		
	
