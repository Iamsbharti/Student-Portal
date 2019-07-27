
<div class="main_btm">
	<div class="container">
		<div class="main row">
			   
<div class="col-md-12">
<?php
	
	include 'db.php';
	{
	$sql=mysql_query("select * from faculty_master ");
	echo'<div id="page-wrap" class="fa-2x">';
	echo '<table class="table table-bordered">';
	echo '<tr>';
	echo '<th>Name</th>';
	echo '<th>Faculty_Id</th>';
	echo '<th>Email Id</th>';
	echo '<th>contact No</th>';
	echo '<th>Status</th>';
	echo '<th>Action</th>';
	echo '</tr>';
	while ($arr=mysql_fetch_array($sql))
	{ 
		echo '<form action="data2.php">';
		echo '<tr>';
		echo '<td>' .$arr["name"]. '</td>';
		echo '<td>' .$arr["faculty_id"]. '</td>';	
		echo '<td>' .$arr["email_id"]. '</td>';
		echo '<td>' .$arr["contactno"]. '</td>';
		echo '<td>' .$arr["status"]. '</td>';
		echo '<td><input type="hidden" value="'.$arr["faculty_id"].'" name="faculty_id"/>';
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