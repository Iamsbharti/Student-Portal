<?php
	$rid=$_GET['rid'];
	include 'db.php';
	if(isset($_GET["editbtn"]))
	{
		header('location:attendanceview.php');
	}
	
?>
