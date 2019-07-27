<?php
	$fid=$_GET['fid'];
	$nid=$GET['nid'];
	include 'db.php';
	if(isset($_GET["feedbackbtn"]))
	{
	mysql_query("delete from user_feedback where feedback_id='".$fid."'");
	}
	header('location:adminhome.php');
	
	if(isset($_GET["noticebtn"]))
	{
	mysql_query("delete from notice_details where notice_id='".$nid."'");
	}
	header('location:adminhome.php');
	
?>
