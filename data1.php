<?php
	$regdno=$_GET['regdno'];
	include 'db.php';
	if(isset($_GET["approve"]))
	{
		mysql_query("UPDATE student_master SET  status='1' where regdno='".$regdno."'");
	}
	
	if($_GET["block"])
	{
		mysql_query("UPDATE student_master SET  status='0' where regdno='".$regdno."'");
	}
	
	if($_GET["delete"])
	{
		mysql_query("delete from student_master where regdno='".$regdno."'");
	}
	header('location:managestudent.php');
?>