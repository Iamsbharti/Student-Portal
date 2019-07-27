<?php
	$faculty_id=$_GET['faculty_id'];
	include 'db.php';
	if(isset($_GET["approve"]))
	{
		mysql_query("UPDATE faculty_master SET  status='1' where faculty_id='".$faculty_id."'");
	}
	
	if($_GET["block"])
	{
		mysql_query("UPDATE faculty_master SET  status='0' where faculty_id='".$faculty_id."'");
	}
	
	if($_GET["delete"])
	{
		mysql_query("delete from faculty_master where faculty_id='".$faculty_id."'");
	}
	header('location:managefaculty.php');
?>