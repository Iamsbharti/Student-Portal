
<div class="main_btm">
	<div class="container">
		<div class="main row">
			   
<div class="col-md-12">
<body>

<?php

$year=$_POST['yr'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];

include 'db.php';
{
$sql=mysql_query("select * from student_master where branch='".$branch."' and semester='".$semester."' and year='".$year."'");
	echo '<div id="page-wrap" class="fa-2x">';
	echo '<table class="table table-bordered">';
	echo '<tr>';
	echo '<th>Name</th>';
	echo '<th>Regd No</th>';
	echo '<th>Email Id</th>';
	echo '<th>contact No</th>';
	echo '<th>Status</th>';
	echo '<th>Action</th>';
	echo '</tr>';
	while ($arr=mysql_fetch_array($sql))
	{ 
		echo '<form action="data1.php">';
		echo '<tr>';
		echo '<td>' .$arr["fname"]. '</td>';
		echo '<td>' .$arr["regdno"]. '</td>';	
		echo '<td>' .$arr["email"]. '</td>';
		echo '<td>' .$arr["contactno"]. '</td>';
		echo '<td>' .$arr["status"]. '</td>';
		echo '<td><input type="hidden" value="'.$arr["regdno"].'" name="regdno"/>';
		echo '<input type="submit" value="Appprove" name="approve" />';
		echo '<input type="submit" value="Block" name="block" />';
		echo '<input type="submit" value="Delete" name="delete" />';
		echo '</td>';
		echo '</tr>';
		echo '</form>';
		
	}
	echo '</table>';
	}
?>
</div>
</div>
</div>
</div>