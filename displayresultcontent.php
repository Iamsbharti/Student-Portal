<?php
		$sem=$_POST['results'];
		$type=$_POST['type'];
		include 'db.php';
		$sql=mysql_query("select * from student_result where regdno='".$_SESSION['regdno']."' and semester='".$sem."' and type='".$type."'");
		if($arr=mysql_fetch_array($sql))	
		{
		$s_file = $arr['file'];	
		}
?>
<br />
<frame width="250" height="500" scrolling="auto" frameborder="1">
<?php 
include "student_result/".$s_file; 
?>
</frame>
<br />