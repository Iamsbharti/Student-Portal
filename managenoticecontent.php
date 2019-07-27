<div class="main_btm">
	<div class="container">
		<div class="main row">
			   
<div class="col-md-12">

<?php
	include 'db.php';
	{
	$sql=mysql_query("select * from notice_details ");
	echo'<div id="page-wrap" class="fa-2x">';

    
	echo'<table class="table table-bordered">';
	echo'<thead>';
		echo '<tr>';
	echo '<th>NOTICE ID</th>';
	echo '<th>SUBJECT</th>';
	echo '<th>TITLE</th>';
	echo '<th>NOTICE</th>';
	echo '<th>DATE</th>';
	echo '<th>ACTION</th>';
		echo'</tr>';
		echo'</thead>';
		while ($arr=mysql_fetch_array($sql))
	{ 
	
	echo '<form action="data.php">';
	echo'<tbody>';
		echo '<tr>';
		echo '<td>' .$arr["notice_id"]. '</td>';
		echo '<td>' .$arr["subject"]. '</td>';	
		echo '<td>' .$arr["title"]. '</td>';
		echo '<td>' .$arr["notice"]. '</td>';
		echo '<td>' .$arr["date"]. '</td>';
		echo '<td><input type="hidden" value="'.$arr["notice_id"].'" name="nid"/>';
		echo '<input type="submit" value="Delete" name="noticebtn"/>';
		echo '</td>';
		echo '</tr>';
		echo'</tbody>';
		echo'</form>';
	}
		echo '</table>';
	}
?>
</div>
</div>
</div>
</div>